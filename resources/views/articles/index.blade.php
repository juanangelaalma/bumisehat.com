@extends('layouts.user')

@section('content')
<div class="bg-white py-14">
  <x-title-header-user title="Artikel" desc="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id velit quasi ad officiis placeat maxime ullam facilis aspernatur officia cumque." line={{ true }}></x-title-header-user>
  <div class="px-2 md:px-24 py-5">
    <div class="w-full grid grid-cols-1 gap-6 md:grid-cols-2">
      <div class="flex flex-col space-y-3">
        <div class="w-full h-[250px] lg:h-[350px] overflow-hidden">
          <img class="w-full h-full object-cover object-center" src="https://s3.theasianparent.com/tap-assets-prod/wp-content/uploads/sites/24/2020/03/virus-corona-pada-kehamilan-F-1.jpg" alt="">
        </div>
        <h1 class="text-dark text-[20px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h1>
        <p class="text-dark-gray text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="" class="text-primary font-semibold">Selengkapnya</a></p>
      </div>
      <div class="flex flex-col space-y-3">
        <div class="w-full h-[250px] lg:h-[350px] overflow-hidden">
          <img class="w-full h-full object-cover object-center" src="https://image-cdn.medkomtek.com/6TonAD7ICpDeC2uIeOPafLfozhA=/673x379/smart/klikdokter-media-buckets/medias/2322131/original/018709800_1608170271-Pentingnya-Mineral-untuk-Kesehatan-Ibu-Hamil-dan-Janin-By-aslysun-shutterstock.jpg" alt="">
        </div>
        <h1 class="text-dark text-[20px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h1>
        <p class="text-dark-gray text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="" class="text-primary font-semibold">Selengkapnya</a></p>
      </div>
      <div class="flex flex-col space-y-3">
        <div class="w-full h-[250px] lg:h-[350px] overflow-hidden">
          <img class="w-full h-full object-cover object-center" src="https://image-cdn.medkomtek.com/6TonAD7ICpDeC2uIeOPafLfozhA=/673x379/smart/klikdokter-media-buckets/medias/2322131/original/018709800_1608170271-Pentingnya-Mineral-untuk-Kesehatan-Ibu-Hamil-dan-Janin-By-aslysun-shutterstock.jpg" alt="">
        </div>
        <h1 class="text-dark text-[20px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h1>
        <p class="text-dark-gray text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="" class="text-primary font-semibold">Selengkapnya</a></p>
      </div>
    </div>
  </div>
</div>
@endsection