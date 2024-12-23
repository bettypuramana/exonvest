@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Brands')
@section('content')
 <!-- shared hosting banner -->
 <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            @lang('messages.brands')
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->


<section class="aboutpage bg-white section__padding">
	<div class="container">
		<div class="filters pt-3">
	<ul id="configcat" class="catgroup">
		<li id="cattop" class="" data-filter=".allBrands">@lang('messages.all_categories')</li>
        @if (!empty($categories))
        @foreach ($categories as $row)
        <li id="fashion-footwear" data-filter=".grid{{$row->id}}">{{$row->category}}</li>
        @endforeach
        @endif


	</ul>
</div>

<div class="filters-content">
	<div class="row grid">
        @if (!empty($brands))
        @foreach ($brands as $brand)
        <div class="col-md-2 col-sm-3 all col-4  allBrands grid{{$brand->category_id}} brandItemsForFilter-cattop">
            <a href="/qa/en/brands/food/starbucks">
                <div class="item">
                    <div class="brandItemsHiddenContentForFilter-cattop" style="display:none;">
                        Starbucks,112,114,115,116,117,118,119,120,121,124,125,126,21446</div>
                    <img src="{{ asset('uploads/brand/'.$brand->image) }}" alt="Starbucks"
                        class="img-fluid" />

                </div>
            </a>
        </div>
        @endforeach
        @endif


	</div>
</div>

	</div>
</section>



<script>
// Select all filter buttons and grid items
const filters = document.querySelectorAll('#configcat li'); // Filters (categories)
const gridItems = document.querySelectorAll('.grid .col-md-2'); // Corrected to match 'col-md-3'

// Add click event listeners to filters
filters.forEach(filter => {
    filter.addEventListener('click', () => {
        // Remove 'active' class from all filters
        filters.forEach(f => f.classList.remove('active'));

        // Add 'active' class to the clicked filter
        filter.classList.add('active');

        // Get the filter category
        const filterCategory = filter.dataset.filter;

        // Show/hide grid items based on the selected filter
        gridItems.forEach(item => {
            if (filterCategory === '.allBrands' || item.classList.contains(filterCategory.substring(1))) {
                item.style.display = 'block'; // Show matching items
            } else {
                item.style.display = 'none'; // Hide non-matching items
            }
        });
    });
});

// Trigger click on the "All Categories" filter to show all items initially
document.querySelector('#cattop').click();

</script>
@endsection
