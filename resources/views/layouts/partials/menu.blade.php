<br>
<div class="container text-center bg-black">
    <div class="row">
      <div class="col">
        <i class="bi bi-cash-coin">
            <a  href="{{route('lancamento.index')}}">
                Lançamentos 
            </a>
        </i>
        
      </div>
      <div class="col">
        <i class="bi bi-wallet2">
            <a href="{{route('centro.index')}}">
                Centro de Custos
            </a>
        </i>
        
      </div>
      <div class="col">
        <i class="bi bi-x-square-fill">
            <a href="{{route('logout')}}">
                Sair
            </a>
        </i>
       
      </div>
    </div>
  </div>
  <hr>

  <style>
    a{
        text-decoration: none;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: white;
        font-size: 18px;
        font-weight: bolder;        
    }

    i{
        color: white
    }
  </style>