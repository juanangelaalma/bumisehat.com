tinymce.init({
    selector: "textarea#body",
    height: 500,
    plugins: [
        "advlist",
        "autolink",
        "lists",
        "link",
        "image",
        "charmap",
        "preview",
        "anchor",
        "searchreplace",
        "visualblocks",
        "code",
        "fullscreen",
        "insertdatetime",
        "media",
        "table",
        "help",
        "wordcount",
    ],
    toolbar:
        "undo redo | blocks | link image" +
        "bold italic backcolor | alignleft aligncenter " +
        "alignright alignjustify | bullist numlist outdent indent | " +
        "removeformat | help | undo redo | link image | code",
    content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
    image_file_types: "jpg,webp,png,jpeg",
    automatic_uploads: true,
    image_title: true,
    file_picker_types: "image",
    images_upload_url: '/upload',
    file_picker_callback: (cb, value, meta) => {
        const input = document.createElement("input");
        input.setAttribute("type", "file");
        input.setAttribute("accept", "image/*");

        input.addEventListener("change", (e) => {
            const file = e.target.files[0];

            const reader = new FileReader();
            reader.addEventListener("load", () => {
                const id = "blobid" + new Date().getTime();
                const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                const base64 = reader.result.split(",")[1];
                const blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            });
            reader.readAsDataURL(file);
        });

        input.click();
    },
    content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
});
