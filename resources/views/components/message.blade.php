@if (session()->has('message'))
<div class='alert alert-success text-center'>
    {{ session()->get('message') }}
</div>
@endif