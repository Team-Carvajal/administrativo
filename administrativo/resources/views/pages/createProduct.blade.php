<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="products"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Agregar Nueva Producto"></x-navbars.navs.auth>
        <!-- End Navbar -->

    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Nueva Producto</h6>
            </div>
        </div>
        <form action="{{ route('guardar-producto') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body px-5 pb-2 col-12 row">
                <label class="form-label">Foto</label>
                <div class=" input-group-outline mt-3 col ">
                    <input type="file" class="btn btn-primary" name="image" required >
                </div>
                <div class="input-group input-group-outline mt-3 col justify-content-end">
                    <input type="submit" class="btn btn-primary" value="Ingresar Producto Nuevo">
                </div>
            </div>
            <div class="card-body px-5 pb-2 col-12 row">
                <div class="container col">
                <div class="input-group input-group-outline mt-3 ">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nameProduct" maxlength="50" required>
                </div>
            </div>
            <div class="container col">
                <div class="input-group input-group-outline mt-3">
                    <label class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descriptionProduct" maxlength="200">
                </div>
            </div>
        </div>
        <div class="card-body px-5 pb-2 col-12 row">
            <div class="container col">
                <div class="input-group input-group-outline mt-3">
                    <label class="form-label">Precio</label>
                    <input type="number" class="form-control" name="price" maxlength="11" required>
                </div>
            </div>
            <div class="container col">
                <div class="input-group input-group-outline mt-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="QuantityAvailable" maxlength="11" required>
                </div>
                </div>
                <div class="container col">
                <div class="input-group input-group-outline mt-3">
                    <label class="form-label">Garantia</label>
                    <input type="number" class="form-control" name="garanty" maxlength="11">
                </div>
                </div>
            </div>
            <div class="card-body px-5 pb-2 col-12 row">
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Color</label>
                    <select class="form-select" name="shirtColors_idShirtColor" required>
                        <option value="" selected disabled></option>
                        @foreach($color as $c)
                            <option value="{{ $c->idShirtColor }}">{{ $c->color }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Tamaño</label>
                    <select class="form-select" name="shirtSize_idShirtSize" required>
                        <option value="" selected disabled></option>
                        @foreach($size as $s)
                            <option value="{{ $s->idShirtSize }}">{{ $s->size }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Tipo</label>
                    <select class="form-select" name="shirtType_idShirtType" required>
                        <option value="" selected disabled></option>
                        @foreach($type as $t)
                            <option value="{{ $t->idShirtType }}">{{ $t->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Estampado</label>
                    <select class="form-select" name="typePrint_idTypePrint" required>
                        <option value="" selected disabled></option>
                        @foreach($print as $p)
                            <option value="{{ $p->idTypePrint }}">{{ $p->typePrint }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" name="category_idCategory" required>
                        <option value="" selected disabled></option>
                        @foreach($category as $cy)
                            <option value="{{ $cy->idCategory }}">{{ $cy->categoryName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" input-group-outline mt-3 col">
                    <label class="form-label">Descuento</label>
                    <select class="form-select" name="descountSettings_id" required>
                        <option value="" selected disabled></option>
                        @foreach($descount as $d)
                            <option value="{{ $d->idDescountSettings }}">{{ $d->descount }} - {{ $d->descriptionDescount }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            </form>
    </div>
    <x-plugins></x-plugins>
</x-layout>