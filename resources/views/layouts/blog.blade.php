
@foreach ($blogs as $blog)
<div class="bg-[#F9F9F9] pb-5 pr-5">
  <div> 
    <img src="{{ asset($blog->image) }}" alt="{{ asset($blog->image) }}">
  </div>
  <div>
    <h1 class="mt-8 ml-5 text-2xl font-bold">{{$blog->title}}</h1>
    <p class="text-sm mt-2 ml-5 max-w-[200px]">{{$blog->content}}</p>
    <p class="text-sm text-[#33B8C8] mt-2 ml-5"> 
      <a href="#">Read More</a> 
    </p>
  </div>
</div>
@endforeach

