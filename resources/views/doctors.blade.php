<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
             <div class="brand">
                 <a href="#hero"> <h1> <span>N</span> MA <span>T</span> OWER</h1></a>
             </div>
             <div class="nav-list">
                 <div class="hamburger"><div class="bar"></div></div>
                 <ul>
                <li><a href="{{url('/')}}" data-after="Home">Home</a></li>
                     <li><a href="{{url('/sickness')}}" data-after="Sickness"> sickness</a></li>
                     <li><a href="{{url('/alldoctor')}}" data-after="Doctors"> doctor</a></li>
                     <li><a href="{{url('/about')}}" data-after="About"> About</a></li>
                     <li><a href="{{url('/contact')}}" data-after="contact"> Contact</a></li>
                 </ul>
             </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"> Doctors <span>Profile </span></h1>
            </div>
            <div class="all-projects">
                @foreach ($doctors as $item)
                    <div class="project-item">
                        <div class="project-info">
                            <h1>{{ $item->name }}</h1>
                            <h2> {{ $item->type }}</h2>
                            <p>
                                {{$item->description}}
                            </p>

                            <a href="{{ url('tct/' . $item->id) }}" type="button" class="cta"> Take ticket</a>

                        </div>
                        <div class="project-img">
                            <img src="{{asset('assets/uploads/products/'.$item->image)}}">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <script src="./ap.js"></script>

</body>

</html>
