@extends('BaseTemplate.main')
@extends('Navbar.navbar')
@section('halaman' , 'Home')


@section('content')
  <section id="home">
      <main class="content" >
        <div>
          <h2 class="col-md-6 text-white">Membacalah untuk hidup, bukan hidup untuk membaca.</h2>
        </div>
    </main>
  </section>

  <section class="about" id="about">
    <div class="text-center pt-5">
      <h2>About</h2>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <div class="col-md-4  text-center">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, 
          ab nobis ducimus natus rem dolorum! Et odit,
          cumque ducimus dolor assumenda minima natus ipsa, consectetur necessitatibus sint vitae,
          ipsum ea? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non reiciendis, 
          libero architecto, animi voluptatum quidem recusandae voluptate, 
          tempora quasi rem in corporis assumenda facilis laudantium eum sapiente molestias! 
          Laboriosam alias necessitatibus error quis tempore saepe accusantium libero modi incidunt, 
          expedita sequi nostrum ea reprehenderit eligendi neque similique quae quo tempora maiores magni veniam animi ipsa optio qui. 
          Quia, distinctio ut?
        </p>
      </div> 
        <div class="col-md-4  text-center">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Commodi dignissimos itaque consectetur odit at ratione adipisci nemo alias incidunt dolor fugiat voluptate,
             magni officia repellendus optio laboriosam reprehenderit impedit Lorem ipsum dolor sit amet consectetur adipisicing elit. 
             Odit sequi nihil ratione consequuntur aut? 
             Mollitia aspernatur qui magni iure, nam culpa a, minus unde voluptates quia odit veniam aliquid tempora, 
             iusto vitae esse deserunt. 
             Iusto autem veritatis id, 
             amet maxime iure velit accusamus deserunt nihil omnis accusantium, perspiciatis modi saepe, 
             sunt reprehenderit consectetur numquam aspernatur ad voluptates ipsam fugit.
             Temporibus.
          </p>
        </div> 
      </div>  
    </section>

  <section class="jenisbuku" id="jenisbuku">
    <div class="text-center my-5">
      <h2>Operational Time</h2>
    </div>
      <div class=" d-flex justify-content-center my-5">
        <div class="w-20 col-md-3 border text-center rounded py-2">
          <h3>Monday - Thursday </h3>
          <p>07.00 WIB - 15.00 WIB</p>
        </div>
        <div class="w-20 col-md-3 border text-center rounded py-2">
          <h3>Friday</h3>
          <p>07.00 WIB - 11.00 WIB</p>
        </div>
        <div class="w-20 col-md-3 border text-center rounded py-2"  > 
          <h3>Saturday - Sunday </h3>
          <p>07.00 WIB - 18.00 WIB</p>
        </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class=" text-center text-white bg-dark pb-2  ">
      <h2>Contact Me</h2>
      <footer class="">
        <a href="instagram.com/fan.er23"><i class="bi bi-instagram text-white"></i></a>
        <a href=""><i class="bi bi-whatsapp text-white"></i></a>
        <a href=""><i class="bi bi-twitter text-white"></i></a>
        <p>Website created by <a href="" class="text-decoration-none">farhan erlangga</a></p>
      </footer>
    </div>
  </section>
@endsection