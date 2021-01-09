<x-app-layout>
    <x-slot name="header">Quiz Create</x-slot>
    
    <div class="acard">
    <div class="card-body">
        <form method="POST" action="{{route('quizzes.store')}}">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Quiz Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title')}}" placeholder="Write title...">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{ old('description')}}</textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" @if(old('finished_at')) checked  @endif type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Finish Date
            </label>
        </div>
        <div id="dateinput" class="mb-3 col-4" @if(!old('finished_at')) style="display:none" @endif >
          
        <input type="datetime-local"  name="finished_at" value="{{ old('finished_at')}}" class="form-control" id="finished_at"></input>
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
        $('#finished_at').val("");      
       }
       
    })
    
    </script>
    </x-slot>
</x-app-layout>
