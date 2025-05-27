@extends('layouts.app')

@section('content')
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-light py-3">
                <h3 class="h5 mb-0"><i class="fas fa-chart-bar me-2"></i>Rapports avancés</h3>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('ordered.products') }}" class="btn btn-outline-info w-100 py-2 text-start">
                            <i class="fas fa-list-ul me-2"></i>Voir les produits commandés
                            <small class="d-block text-muted mt-1">Exemple de jointure Eloquent</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('same.products.customers') }}"
                            class="btn btn-outline-warning w-100 py-2 text-start">
                            <i class="fas fa-users me-2"></i>Clients avec mêmes commandes
                            <small class="d-block text-muted mt-1">Comme Annabel Stehr</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('products.orders_count') }}" class="btn btn-outline-dark w-100 py-2 text-start">
                            <i class="fas fa-sort-amount-up me-2"></i>Commandes par produit
                            <small class="d-block text-muted mt-1">Analyse de décompte</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('products.more_than_6_orders') }}"
                            class="btn btn-outline-primary w-100 py-2 text-start">
                            <i class="fas fa-fire me-2"></i>Produits populaires
                            <small class="d-block text-muted mt-1">Plus de 6 commandes</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('orders.totals') }}" class="btn btn-outline-danger w-100 py-2 text-start">
                            <i class="fas fa-money-bill-wave me-2"></i>Totaux des commandes
                            <small class="d-block text-muted mt-1">Montant par commande</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('orders.greater_than_60') }}"
                            class="btn btn-outline-secondary w-100 py-2 text-start">
                            <i class="fas fa-arrow-up me-2"></i>Commandes de grande valeur
                            <small class="d-block text-muted mt-1">Supérieures à la commande 60</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-light py-3">
                <h3 class="h5 mb-0"><i class="fas fa-database me-2"></i>{{ __('Requêtes de base de données') }}</h3>
            </div>
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('dashboard.customer_orders') }}" class="btn btn-primary w-100 py-2 text-start">
                            <i class="fas fa-user-tag me-2"></i>{{ __('Commandes clients') }}
                            <small class="d-block text-white mt-1">{{ __('Noms des clients pour chaque commande') }}</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('dashboard.suppliers_by_customer') }}"
                            class="btn btn-success w-100 py-2 text-start">
                            <i class="fas fa-truck me-2"></i>{{ __('Fournisseurs par client') }}
                            <small class="d-block text-wihite mt-1">{{ __('Pour Annabel Stehr') }}</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('dashboard.products_same_warehouse') }}"
                            class="btn btn-info w-100 py-2 text-start">
                            <i class="fas fa-warehouse me-2"></i>{{ __('Produits dans les mêmes entrepôts') }}
                            <small class="d-block text-white mt-1">{{ __('Comme les produits de Scottie Crona') }}</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('dashboard.products_per_warehouse') }}"
                            class="btn btn-warning w-100 py-2 text-start">
                            <i class="fas fa-boxes me-2"></i>{{ __('Produits par entrepôt') }}
                            <small class="d-block text-wihite mt-1">{{ __('Nombre par entrepôt') }}</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('dashboard.warehouse_values') }}" class="btn btn-danger w-100 py-2 text-start">
                            <i class="fas fa-dollar-sign me-2"></i>{{ __('Valeurs des entrepôts') }}
                            <small class="d-block text-white mt-1">{{ __('Somme des valeurs des produits') }}</small>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('dashboard.warehouses_greater_value') }}"
                            class="btn btn-dark w-100 py-2 text-start">
                            <i class="fas fa-chart-line me-2"></i>{{ __('Comparaison des entrepôts') }}
                            <small class="d-block text-white mt-1">{{ __('Supérieur à Lind-Gislason') }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection