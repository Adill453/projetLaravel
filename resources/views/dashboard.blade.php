@extends('layouts.app')

@section('content')
<div class="header-actions d-flex justify-content-end">
    <div>
        <a href="{{ route('profile') }}" class="btn btn-outline-success me-2">@lang('Mon profil')</a>
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger">@lang('Se déconnecter')</button>
        </form>
    </div>
</div>

<div class="py-5">

        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-3">@lang("Welcome")</h2>
            <p class="lead text-muted mb-4">@lang("Slogon")</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 70px; height: 70px; background-color: rgba(67, 97, 238, 0.1);">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">@lang('Clients & Fournisseurs')</h3>
                        <p class="card-text text-muted mb-4">@lang('Gérez les informations de vos clients et fournisseurs')</p>
                        <div class="mt-auto d-flex gap-2 w-100">
                            <a href="/customers" class="btn btn-primary w-50"><i
                                    class="fas fa-user me-2"></i>@lang("List of Customers")</a>
                            <a href="/suppliers" class="btn btn-success w-50 "><i
                                    class="fas fa-truck me-2"></i>@lang("List of Suppliers")</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 70px; height: 70px; background-color: rgba(86, 11, 173, 0.1);">
                            <i class="fas fa-box-open fa-2x text-info"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">@lang('Produits')</h3>
                        <p class="card-text text-muted mb-4">@lang('Consultez et gérez votre inventaire de produits')</p>
                        <div class="mt-auto d-flex gap-2 w-100">
                            <a href="{{ route('products.index') }}" class="btn btn-info w-100"><i
                                    class="fas fa-boxes me-2"></i>@lang("List of Products")</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <div class="icon-wrapper mb-3 d-flex align-items-center justify-content-center rounded-circle"
                            style="width: 70px; height: 70px; background-color: rgba(247, 37, 133, 0.1);">
                            <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                        </div>
                        <h3 class="card-title h5 mb-3">@lang('Commandes')</h3>
                        <p class="card-text text-muted mb-4">@lang('Suivez et gérez les commandes clients')</p>
                        <div class="mt-auto d-flex gap-2 w-100">
                            <a href="{{ route('orders.index') }}" class="btn btn-warning w-100"><i
                                    class="fas fa-file-invoice-dollar me-2"></i>@lang('Commandes')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-5">
            <div class="card-header bg-light py-3">
                <h3 class="h5 mb-0"><i class="fas fa-filter me-2"></i>@lang('Parcourir les produits par')</h3>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="/products-by-category" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-tags me-2"></i>@lang('Produits par catégorie')
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/products-by-supplier" class="btn btn-outline-secondary w-100 py-3">
                            <i class="fas fa-industry me-2"></i>@lang('Produits par fournisseur')
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/products-by-store" class="btn btn-outline-dark w-100 py-3">
                            <i class="fas fa-store me-2"></i>@lang('Produits par magasin')
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-light py-3">
                <h3 class="h5 mb-0"><a href="/mail-form " class="btn w-100 py-3" style="background-color: var(--accent-color); color: bisque;"><i class="fas fa-envelope me-2"></i> Cliquer ici pour envoyer un mail</a></h3>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="/baseDonnee" class="btn btn-outline-danger w-100 py-3">
                            <i class="fas fa-tags me-2"></i>Requêtes de base de données <small class="d-block mt-1">( les Requêtes eloquent )</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/partie26" class="btn btn-outline-secondary w-100 py-3">
                            <i class="fas fa-industry me-2"></i>cookies - session - upload<small class="d-block mt-1">La partie 26</small>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-outline-dark w-100 py-3">
                            <i class="fas fa-store me-2"></i>Export & Import Excel <small class="d-block mt-1">se trouve dans la card produits</small>
 </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection