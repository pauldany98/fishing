@php
    $form = App\Models\datapost::all();
    
@endphp
<style>
    .copy-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 80%;
  margin: auto;
  position: relative;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #f9f9f9;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

#text-to-copy {
  margin-bottom: 10px;
  font-size: 16px;
  color: #333;
  line-height: 1.5;
  text-align: center;
}

#copy-btn {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s;
}

#copy-btn:hover {
  background-color: #0056b3;
}
.toptext{
    font-size: 18px;
    color: #333;
    line-height: 1.5;
    text-align: center;
    position: absolute;
    top: -10px;

}
</style>


@foreach($form as $forms)
<div class="copy-container">
    <p>{{ $forms->title}}</p>
    <p id="text-to-copy">
        {{ \Carbon\Carbon::parse($forms['created_at'])->diffForHumans() }}
    </p>
   
    <a id="copy-btn" href="{{ route('delete', $forms->id) }}" class="btn btn-danger">Delete</a>
 </div>
@endforeach


