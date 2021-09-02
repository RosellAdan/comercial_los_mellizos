<ul id="sidenav-left" class="sidenav">
    <li><div class="user-view dark-primary-color">
              <a href="#user"><img class="circle" src="{{asset('imgs/perfil.jfif')}}"></a>
              <a href="#name"><span class="white-text name">{{ auth()->user()->personal->nombre.' '.auth()->user()->personal->apellido }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader">Administración Del Comercial</a></li>
    <li><a class="waves-effect" href="{{ route('tipopersonal.index') }}">Gestionar Tipo Personal<i class="material-icons">perm_identity</i></a></li>
    <li><a class="waves-effect" href="{{ route('personal.index') }}">Gestionar Personal <i class="material-icons">person_add</i></a></li>
    <li><a class="waves-effect" href="{{ route('proveedor.index') }}">Gestionar Proveedor <i class="material-icons">person_add</i></a></li>
    <li><a class="waves-effect" href="{{ route('compra.index') }}">Gestionar Compra <i class="material-icons">shop_two</i></a></li>
    <li><a class="waves-effect" href="{{ route('producto.index') }}">Gestionar Producto <i class="material-icons">dashboard</i></a></li>
    <li><a class="waves-effect" href="{{ route('tipoproducto.index') }}">Gestionar Tipo Producto <i class="material-icons">apps</i></a></li>
    <li><a class="waves-effect" href="{{ route('tipoventa.index') }}">Gestionar Tipo Venta <i class="material-icons">payment</i></a></li>
    <li><a class="waves-effect" href="{{ route('venta.index') }}">Gestionar Venta <i class="material-icons">shopping_cart</i></a></li>
    <li><a class="waves-effect" href="{{ route('cliente.index') }}">Gestionar Cliente <i class="material-icons">person_add</i></a></li>
    <li><a class="waves-effect" href="{{ route('factura.index') }}">Gestionar Factura <i class="material-icons">apps</i></a></li>
    <li><a class="waves-effect" href="{{ route('usuario.index') }}">Gestionar Usuario <i class="material-icons">contact_mail</i></a></li>
</ul>
