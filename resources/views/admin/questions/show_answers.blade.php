@include('admin.questions.partials.details_answer', [
    'user' => $user,
    'answers' => $answers,
    'true_answer' => $true_answer,
    'false_answer' => $false_answer,
    'true_point' => $true_point,
    'total_point' => $total_point,
    'title' => $title,
])
