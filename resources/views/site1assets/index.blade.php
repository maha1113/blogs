      @extends('site1assets.master')

      @section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{ asset('site1assets/assets/img/home-bg.jpg') }}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->

                    @foreach ($posts as $post)

                    <div class="post-preview">
                        <a href="{{ route('show.posts',$post->id) }}">
                            <h2 class="post-title">{{ $post->id }}</h2>
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->description }}</h3>
                            @foreach ($post->comments as $comment)
                            <h4>{{$comment->title }}</h4>
                            <h4>{{$comment->description }}</h4>
                            @endforeach
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $post->auther->name }}</a>
                            on {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->

                    @endforeach

                    <!-- Divider-->
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>

        @endsection
