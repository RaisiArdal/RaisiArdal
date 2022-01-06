@if(isset($categorys))
        <ul class="text-center">

        @foreach($categorys as $category)
                     <li  @if($category->parent_id!=0) class="pr-5" @endif ><input type="radio"  value="{{$category->id}}"/>
                          <label  for="{{$category->id}}">{{$category->name}}</label></li>
                @if($category->getChild())
                             @include('category.show', ['categorys' => $category->getChild])
                @endif
            @endforeach
        </ul>

@endif
