<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="products"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Actualizar Camisa"></x-navbars.navs.auth>
        <!-- End Navbar -->

    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Actualizar Camisa</h6>
            </div>
        </div>
        <form action="{{ url('actualizar-producto/'. $product['idproduct']) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body px-5 pb-2 col-12 row">
                <div class="col-3  px-5 pb-2">
                    <label class="form-label">Foto</label>
                    <div class="row-cols-1 col">
                        <img src="{{ $product['image'] }}" alt="Imagen-producto-{{ $product['nameProduct'] }}" >
                    </div>
                    <div class=" input-group-outline mt-3 ">
                        <input type="file" class="btn btn-primary" name="image"  value="{{ $product['image'] }}">
                    </div>
                </div>
            </div>
            <div class="card-body px-5 pb-2 col-12 row">
                <div class="container col">
                <div class="input-group input-group-outline mt-3 focused is-focused">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nameProduct" maxlength="50"  value="{{ $product['nameProduct'] }}">
                </div>
            </div>
            <div class="container col">
                <div class="input-group input-group-outline mt-3 focused is-focused">
                    <label class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descriptionProduct" maxlength="200" value="{{ $product['descriptionProduct'] }}">
                </div>
            </div>
        </div>
        <div class="card-body px-5 pb-2 col-12 row">
            <div class="container col">
                <div class="input-group input-group-outline mt-3 focused is-focused">
                    <label class="form-label">Precio</label>
                    <input type="number" class="form-control" name="price" maxlength="11"  value="{{ $product['price'] }}">
                </div>
            </div>
            <div class="container col">
                <div class="input-group input-group-outline mt-3 focused is-focused">
                    <label class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="QuantityAvailable" maxlength="11"  value="{{ $product['QuantityAvailable'] }}">
                </div>
                </div>
                <div class="container col">
                <div class="input-group input-group-outline mt-3 focused is-focused">
                    <label class="form-label">Garantia</label>
                    <input type="number" class="form-control" name="garanty" maxlength="11" value="{{ $product['garanty'] }}">
                </div>
                </div>
            </div>
            <div class="card-body px-5 pb-2 col-12 row">
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Color</label>
                    <select class="form-select" name="shirtColors_idShirtColor" >
                        <option value="{{ $product['shirtColors_idShirtColor'] }}" selected></option>
                        @foreach($color as $c)
                            <option value="{{ $c->idShirtColor }}">{{ $c->color }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Tamaño</label>
                    <select class="form-select" name="shirtSize_idShirtSize" >
                        <option value="{{ $product['shirtSize_idShirtSize'] }}" selected ></option>
                        @foreach($size as $s)
                            <option value="{{ $s->idShirtSize }}">{{ $s->size }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Tipo</label>
                    <select class="form-select" name="shirtType_idShirtType" >
                        <option value="{{ $product['shirtType_idShirtType'] }}" selected ></option>
                        @foreach($type as $t)
                            <option value="{{ $t->idShirtType }}">{{ $t->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Estampado</label>
                    <select class="form-select" name="typePrint_idTypePrint" >
                        <option value="{{ $product['typePrint_idTypePrint'] }}" selected ></option>
                        @foreach($print as $p)
                            <option value="{{ $p->idTypePrint }}">{{ $p->typePrint }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" name="category_idCategory" >
                        <option value="{{ $product['category_idCategory'] }}" selected ></option>
                        @foreach($category as $cy)
                            <option value="{{ $cy->idCategory }}">{{ $cy->categoryName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Descuento</label>
                    <select class="form-select" name="descountSettings_id" >
                        <option value="{{ $product['descountSettings_id'] }}" selected ><option>
                        @foreach($descount as $d)
                            <option value="{{ $d->idDescountSettings }}">{{ $d->descount }} - {{ $d->descriptionDescount }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="input-group input-group-outline mt-3 col-2 ">
                <input type="submit" class="btn btn-primary" value="Actualizar Producto">
            </div>
            </form>
    </div>
    <x-plugins></x-plugins>
</x-layout>