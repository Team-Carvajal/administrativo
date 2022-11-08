<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="products"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Productos diponibles"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Disponibles</h6>
                                </div>
                                <a href=" {{ route('nuevo-producto') }}" ><button class="btn btn-primary">Agregar Nueva Camisa</button></a>
                                <a href=" {{ route('nuevo-producto') }}" ><button class="btn btn-warning">Camisas No disponibles</button></a>
                                <div class="px-1 pb-1 col-12 row">
                                <div class=" input-group-outline mt-3 col">
                                    <label class="form-label">Filtrar por Color</label>
                                    <select class="form-select" name="color" >
                                        <option value="" selected disabled></option>
                                        @foreach($color as $c)
                                            <option value="{{ $c->idShirtColor }}">{{ $c->color }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" input-group-outline mt-3 col">
                                    <label class="form-label">Filtrar por Tamaño</label>
                                    <select class="form-select" name="size" >
                                        <option value="" selected disabled></option>
                                        @foreach($size as $s)
                                            <option value="{{ $s->idShirtSize }}">{{ $s->size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" input-group-outline mt-3 col">
                                    <label class="form-label">Filtrar por Tipo</label>
                                    <select class="form-select" name="type" >
                                        <option value="" selected disabled></option>
                                        @foreach($type as $t)
                                            <option value="{{ $t->idShirtType }}">{{ $t->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" input-group-outline mt-3 col">
                                    <label class="form-label">Filtrar por Impresión</label>
                                    <select class="form-select" name="print" >
                                        <option value="" selected disabled></option>
                                        @foreach($print as $tp)
                                            <option value="{{ $tp->idTypePrint }}">{{ $tp->typePrint }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" input-group-outline mt-3 col">
                                    <label class="form-label">Filtrar por Categoria</label>
                                    <select class="form-select" name="category" >
                                        <option value="" selected disabled></option>
                                        @foreach($category as $cy)
                                            <option value="{{ $cy->idCategory }}">{{ $cy->categoryName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nombre</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Disponible</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Precio</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Tamaño</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Color</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Impresión</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Categoria</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Descuento</th>
                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $product)
                                                
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ $product->image }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="ver-producto/". {{ $product->idproduct }}><p class="text-xs text-secondary mb-0">
                                                                {{ $product->nameProduct }}
                                                            </p></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->QuantityAvailable}}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->price }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->size }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->color }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->typePrint }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->categoryName }}</p>
                                                </td>
                                                @if($product->descount <= 0)
                                                    <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->descriptionDescount }}</p>
                                                    </td>
                                            @else
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $product->descount.' %' }}</p>
                                                </td>
                                            
                                            @endif
                                                <td>
                                                    <a href="{{ url('editar-producto/'.$product->idproduct) }}"
                                                    class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit product">
                                                    Editar
                                                </a>
                                                    <a href="{{ url('ocultar-producto/'.$product->idproduct) }}"
                                                    class="text-secondary font-weight-bold text-xs px-3"
                                                    data-toggle="tooltip" data-original-title="hide product">
                                                    Eliminar
                                                </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Camisas No Disponibles</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center justify-content-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nombre</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Descripción</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Precio</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                    Fecha Eliminación</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/small-logos/devto.svg"
                                                                class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm">Devto</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">done</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span class="me-2 text-xs font-weight-bold">100%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-success"
                                                                    role="progressbar" aria-valuenow="100"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    style="width: 100%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <button class="btn btn-link text-secondary mb-0"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v text-xs"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>
