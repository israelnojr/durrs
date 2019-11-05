@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger flash flash-error ">
            <button type="button" aria-hidden="true" class="close close position" 
            onclick="this.parentElement.style.display='none'"></button>
            <span>
            <b> Danger - </b> {{ $error }}</span>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success flash flash-success">
        <button type="button" aria-hidden="true" class="close  position" onclick="this.parentElement.style.display='none'"></button>
        <span><b> Success - </b> {{ session('success') }}</span>
    </div>
@endif