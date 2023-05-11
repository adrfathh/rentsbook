@extends ('master.master')

@section ('content')

      <!-- Navbar -->

<nav id="home" class="navbar">
  <h1>RentsBook</h1>
  <div class="nav-menu">
    <ul>
      <a class="home" href="#home">Home</a>
      <a class="home" href="#read">Read</a>
      <a class="home" href="#about-me">About Me</a>
      <a class="home" href="#massage">Massage</a>
      <a class="getstarted scrollto" href="/login">Login</a></li>
    <ul>
  </div>
</nav>

      <!-- carousel -->

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/library1.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="images/library2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="images/library3.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      <!-- Books card -->

<div id="read" class="card-content">
  <h1>Read some Books!</h1>
  <div class="card-flex">
    <div class="card" style="width: 18rem;">
      <img src="images/novel1.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">The King of Drugs</h5>
        <p class="card-text">Addiction affects multiple brain circuits, including those involved in reward and motivation.</p>
        <a href="/login" class="btn btn-primary">Read</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="images/novel2.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Memory</h5>
        <p class="card-text">Nina Rogers is different, she can recall every moment of her life or at least she could.</p>
        <a href="/login" class="btn btn-primary">Read</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="images/novel3.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">To The Moon & Back</h5>
        <p class="card-text">There are many ways that can be done to express our feelings of love or affection to others.</p>
        <a href="/login" class="btn btn-primary">Read</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="images/novel4.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Another Side of The Moon</h5>
        <p class="card-text">Dark Side of the Moon seems more like something you have to listen to in its entirety.</p>
        <a href="/login" class="btn btn-primary">Read</a>
      </div>
    </div>
  </div>
</div>


      <!-- Accordion -->

<div class="accordion" id="about-me">
  <h1>About Me</h1>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Hi, this about me!
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>My name is Adrian Fathir Firmansyah,</strong> who is usually called Fathir. I was born in Jakarta, on June 14, 2006. My favorite food is grilled chicken, while my favorite drink is fruit juice. I really like sports, for example like basketball, badminton, and swimming. I also like traveling to nature with my relatives and friends. I have a hobby of doing sports activities, I even participated in several competitions.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        I have a hobby!
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        I have several hobbies such as exercising, making designs/mockups that I can use in the world of work and others. Playing games is not a hobby, but when I have free time I do gaming activities.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        It's about my skills
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        The skills that I got from school were being able to give opinions on something, being able to mingle with new people even though it took quite a long time, being responsible in organizations and as a student, and also I could.
      </div>
    </div>
  </div>
</div>

      <!-- Massage -->

<div id="massage" class="massage">
    <h1>massage</h1>
    <form action="/landing/store" method="POST" class="massage-from">
        @csrf
        <div class="inputer">
            <input class="input" type="text" name="nama" placeholder="Name"><br>
            <input class="input-massage" type="text" name="massage" placeholder="Massage"><br>
            <input class="submit" type="submit" name="submit" value="Send">
        </div>
    </form>
</div>

@endsection