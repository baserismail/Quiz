<x-app-layout>
    <x-slot name="header">Quiz Create</x-slot>

    <div class="acard">
    <div class="card-body">
        <form method="POST" action="{{route('quizzes.store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Quiz Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Write title..." required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Finish Date
            </label>
        </div>
        <div id="dateinput" class="mb-3" style="display:none">
          
            <input type="datetime-local" name="finishDate" class="form-control" id="finishDate"></input>
        </div>
        <div class="mb-3 mt-3">
           
            <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Create</button>
        </div>
        </form>
    </div>
    </div>
    <x-slot name="js">
    <script>

    $('#flexCheckDefault').change(function(){
       if($('#flexCheckDefault').is(':checked')){
           $('#dateinput').show();
       }
       else{
        $('#dateinput').hide();
       }
    })
    
    </script>
    </x-slot>
</x-app-layout>
