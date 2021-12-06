@if($subCategory->is_halal)
  <img src="{{asset('images/foodlist/logos/halal.png')}}" alt="halal" width="50">
@elseif($subCategory->is_vegan)
  <img src="{{asset('images/foodlist/logos/vegan.png')}}" alt="vegan" width="50">
@elseif($subCategory->is_veggie)
  <img src="{{asset('images/foodlist/logos/veggie.png')}}" alt="veggie" width="50">

@elseif($subCategory->spicy_level == 1)
  <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
@elseif($subCategory->spicy_level == 2)
  <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
  <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
@elseif($subCategory->spicy_level == 3)
  <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
  <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
  <img src="{{asset('images/foodlist/logos/chilli.png')}}" alt="chilli" width="25">
@endif