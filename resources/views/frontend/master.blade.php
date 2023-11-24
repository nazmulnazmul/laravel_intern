@include('frontend.include.header')

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                
               @yield('main_content')
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    @include('frontend.include.footer')
    @include('frontend.include.scipt')
    