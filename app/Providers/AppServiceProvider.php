<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cashier\User;
use Laravel\Cashier\Cashier;
use Laravel\Cashier\Subscription as CashierSubscription;
use App\Models\Cashier\Subscription;
use App\Models\Cashier\SubscriptionItem;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Cashier::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cashier::useCustomerModel(User::class);
        Cashier::calculateTaxes();
        Cashier::useSubscriptionModel(Subscription::class);
        Cashier::useSubscriptionItemModel(SubscriptionItem::class);

    }
}
