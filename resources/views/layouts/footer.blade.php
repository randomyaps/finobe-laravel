{{-- random 2025 --}}
{{-- footer --}}

<footer class="footer">
   <div class="container">
      <p class="my-0">
         <b>Copyright © {{ $projectName ?? 'Finobe' }} {{ date('Y') }}</b> |
         <b>Lucky number:</b> {{ rand(1, 93484) }}
      </p>

      <div class="d-flex align-items-center mt-1 mb-0">
         <div class="dropdown">
            <button class="btn btn-theme btn-sm mr-2 mb-0" type="button" id="locale-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="far fa-globe mr-2"></i>
               <i class="far fa-chevron-up"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="locale-dropdown">
               <a class="dropdown-item locale-change-link active" href="#" data-locale="en">English (US)</a>
               <a class="dropdown-item locale-change-link" href="#" data-locale="pt_BR">Português (Brasil)</a>
               <a class="dropdown-item locale-change-link" href="#" data-locale="es_US">Español (Estados Unidos)</a>
               <a class="dropdown-item locale-change-link" href="#" data-locale="de_DE">Deutsch</a>
               <a class="dropdown-item locale-change-link" href="#" data-locale="pl_PL">Polski (Polska)</a>
            </div>
         </div>

         <p class="my-0">
            <a href="{{ url('/legal/about-us') }}">About Us</a> |
            <a href="{{ url('/legal/rules') }}">Rules</a> |
            <a href="{{ url('/legal/terms') }}">Terms of Service</a> |
            <a href="{{ url('/legal/privacy') }}">Privacy Policy</a>
         </p>
      </div>
   </div>
</footer>

<script src="{{ asset('js/js1.js') }}"></script>
<script src="{{ asset('js/js2.js') }}"></script>
<script src="{{ asset('js/js3.js') }}"></script>
<script src="{{ asset('js/js4.js') }}"></script>
