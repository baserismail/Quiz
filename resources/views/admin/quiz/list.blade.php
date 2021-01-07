<x-app-layout>
    <x-slot name="header">Quizes</x-slot>
<div class="container">
    <a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add Quiz</a>
    <br>
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Quiz</th>
      <th scope="col">Status</th>
      <th scope="col"> Date</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($quizzes as $quiz)
    <tr>
      
      <td>{{$quiz->title}}</td>
      <td>{{$quiz->status}}</td>
      <td>{{$quiz->finished_at}}</td>
      <td>
      <a href="#" class="btn btn-sm btn-primary"><i class = "fa fa-pen"></i></a>
      <a href="#" class="btn btn-sm btn-danger"><i class = "fa fa-times"></i></a>      
       </td>
    </tr>
   @endforeach
  </tbody>
</table>
{{$quizzes->links()}}
</div>
</x-app-layout>
