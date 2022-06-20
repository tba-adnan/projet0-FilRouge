<!DOCTYPE html>
<html lang="en">

@include('pages.layouts.head')

<body>

    @include('pages.layouts.header')
        <div id="layoutSidenav_content">
           
            <main>
                
                @yield('content')

            </main>
          @include('pages.layouts.footer') 

          
    </div>
</div>
    

</body>

</html>