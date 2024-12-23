@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Blog Detail')
@section('content')
<div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            @lang('messages.blog_details')
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

   <div class="rts-blog-details section__padding">
        <div class="container">
            <div class="row g-40">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="blog-details__featured-image">
                            <img src="{{ asset('uploads/blog/'.$blog->main_image) }}" alt="blog post">
                        </div>
                        <div class="blog-details__article-meta mt--40">
                            <!-- <a href="#"><span><i class="fa-light fa-user"></i></span>Zayed Khan</a> -->
                            <span><span><i class="fa-light fa-clock"></i></span>{{ date('d M, Y', strtotime($blog->date)) }}</span>
                            <!-- <a href="#"><span><i class="fa-sharp fa-light fa-tags"></i></span>Hosting Feature</a> -->
                        </div>
                        <h3 class="blog-title">{{$blog->title}}</h3>
                        <p>{!!$blog->description!!}</p>
                        <!-- <p>Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate multidisciplinary compatible architectures pidiously repurpose leading edge growth strategies with just in time web readiness communicate timely meta services </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolorum officia iure, culpa nesciunt omnis voluptas libero hic dicta vitae nulla quisquam modi deserunt, voluptatibus reprehenderit non ipsum exercitationem maxime cum! Veniam quaerat, incidunt odio sunt voluptatum nostrum quod dolorem et iusto magni, laborum ut a atque voluptatibus voluptates corrupti consequatur? Neque tempora totam blanditiis doloribus omnis ducimus consequuntur quod ipsum repellat iure, in molestiae magnam quia! Ullam natus illo, voluptates nemo fuga laboriosam distinctio nisi consequuntur quia aut repudiandae delectus cumque officia ab minima suscipit voluptate ea velit hic sint quas dignissimos autem qui earum! Incidunt iure inventore qui.</p>
                        <blockquote class="rts-blockquote">
                            <h4>Building smart business solution for you</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo repellat vero dicta velit, doloribus, fugit exercitationem sapiente quibusdam voluptatibus deserunt quasi alias ducimus corrupti Lorem ipsum dolor sit amet..</p>
                            <span>Maria Sarapoba</span>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aliquid perferendis magni nihil beatae, delectus recusandae minus sequi molestiae iste, perspiciatis expedita amet suscipit? Consequatur accusantium sed voluptatem et nulla dicta tempora. Error numquam earum, adipisci quod, placeat voluptatibus similique sunt quis saepe omnis itaque. Vero saepe eius iste, veritatis voluptas tenetur, porro repellat rem, quia fugiat ad sunt architecto amet expedita. Quibusdam recusandae adipisci ipsa tenetur, nostrum quasi ut veritatis et rerum! Amet odio nam animi adipisci reprehenderit nostrum repellat labore dignissimos. Tenetur distinctio possimus veritatis quasi unde rem nesciunt maiores vel eveniet id! Eveniet deserunt atque molestiae alias!</p>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="post-image">
                                    <img src="{{asset('assets/images/blog/post-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-image">
                                    <img src="{{asset('assets/images/blog/post-2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <h3 class="sub-title fw-bold">Building smart business solution for you</h3>
                        <p>Gravida maecenas lobortis suscipit mus sociosqu convallis, mollis vestibulum donec aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor montes platea iaculis posuere per mauris, eros porta blandit curabitur ullamcorper varius nostra ante risus egestas. </p>
                        <div class="row mb-5 align-items-center">
                            <div class="col-md-5">
                                <div class="post-image mb-5 mb-lg-0">
                                    <img src="{{asset('assets/images/blog/post-3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>How will activities traditional manufacturing</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>All these digital and projects aim to enhance</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>I monitor my software that takes screenshots</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Laoreet dolore niacin sodium glutimate
                                        </span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Minim veniam sodium glutimate nostrud</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui facere architecto obcaecati quam temporibus aut sunt, perferendis mollitia nisi, vel hic nostrum? Numquam eos autem vel rem minima sint natus, voluptatem voluptatum quia nulla fugiat reprehenderit porro, harum fuga? Neque explicabo voluptatem expedita consectetur in, sunt nisi non id doloremque.</p> -->
                    </article>
                    <!-- <div class="blog-info">
                        <div class="blog-share">
                            <div class="share">Share:</div>
                            <div class="social__media--list">
                                <a href="#" class="media"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="media"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="media"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#" class="media"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="media"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <div class="rts-sidebar">

                        <!-- single widget start -->
                        <div class="rts-single-widget recentpost-widget">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="recent-posts">
                                @if(!empty($recent))
                                @foreach($recent as $row)
                                    <div class="single-post">
                                        <div class="thumb">
                                            <img src="{{ asset('uploads/blog/'.$row->main_image) }}" alt="" height="85" width="85">
                                        </div>
                                        <div class="meta">
                                            <span class="published"><i class="fa-regular fa-clock"></i> {{ date('d M, Y', strtotime($row->date)) }}</span>
                                            <h6 class="title"><a href="{{route('user.blog_detail', ['id' =>$row->id,'cate_slug'=>$row->blog_slug])}}">{{$row->title}}</a></h6>
                                        </div>
                                    </div>
                                @endforeach                           
                                @endif
                            </div>
                            
                        </div>
                        <!-- single widget end -->


                        <!-- single widget start -->
                        <!-- <div class="rts-single-widget gallery-widget">
                            <h4 class="widget-title">Gallery Post</h4>
                            <div class="gallery-posts">
                                <a href="blog-details.html" class="thumb">
                                    <img src="{{asset('assets/images/blog/gallery-post-1.png')}}" height="95" width="95" alt="">
                                </a>
                                <a href="blog-details.html" class="thumb">
                                    <img src="{{asset('assets/images/blog/gallery-post-2.png')}}" height="95" width="95" alt="">
                                </a>
                                <a href="blog-details.html" class="thumb">
                                    <img src="{{asset('assets/images/blog/gallery-post-3.png')}}" height="95" width="95" alt="">
                                </a>
                                <a href="blog-details.html" class="thumb">
                                    <img src="{{asset('assets/images/blog/gallery-post-4.png')}}" height="95" width="95" alt="">
                                </a>
                                <a href="blog-details.html" class="thumb">
                                    <img src="{{asset('assets/images/blog/gallery-post-5.png')}}" height="95" width="95" alt="">
                                </a>
                                <a href="blog-details.html" class="thumb">
                                    <img src="{{asset('assets/images/blog/gallery-post-6.png')}}" height="95" width="95" alt="">
                                </a>
                            </div>
                        </div> -->
                        <!-- single widget end -->

                        <!-- single widget start -->
                        <div class="rts-single-widget tags-widget">
                            <h4 class="widget-title">popular tags</h4>
                            <div class="popular-tags">
                                <ul class="list-unstyled tags-style">
                                @if(!empty($tags))
                                @foreach($tags as $row)
                                    <li class="tags"><a href="#">{{$row->name}}</a></li>
                                @endforeach                           
                                @endif
                                    <!-- <li class="tags"><a href="#">Business</a></li>
                                    <li class="tags"><a href="#">Growth</a></li>
                                    <li class="tags"><a href="#">Kitchen</a></li>
                                    <li class="tags"><a href="#">Interior Design</a></li>
                                    <li class="tags"><a href="#">Solution</a></li>
                                    <li class="tags"><a href="#">Urban</a></li>
                                    <li class="tags"><a href="#">Buildings</a></li>
                                    <li class="tags"><a href="#">Architecture</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- single widget end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG DETAILS END -->





	@endsection
