<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(AddonsTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(AppTranslationsTableSeeder::class);
        $this->call(AttributeCategoryTableSeeder::class);
        $this->call(AttributeTranslationsTableSeeder::class);
        $this->call(AttributeValuesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BrandTranslationsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(BusinessSettingsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryTranslationsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CityTranslationsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(CombinedOrdersTableSeeder::class);
        $this->call(CommissionHistoriesTableSeeder::class);
        $this->call(ConversationsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CouponUsagesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(CustomerPackagePaymentsTableSeeder::class);
        $this->call(CustomerPackageTranslationsTableSeeder::class);
        $this->call(CustomerPackagesTableSeeder::class);
        $this->call(CustomerProductTranslationsTableSeeder::class);
        $this->call(CustomerProductsTableSeeder::class);
        $this->call(FirebaseNotificationsTableSeeder::class);
        $this->call(FlashDealProductsTableSeeder::class);
        $this->call(FlashDealTranslationsTableSeeder::class);
        $this->call(FlashDealsTableSeeder::class);
        $this->call(HomeCategoriesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PageTranslationsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PickupPointTranslationsTableSeeder::class);
        $this->call(PickupPointsTableSeeder::class);
        $this->call(ProductStocksTableSeeder::class);
        $this->call(ProductTaxesTableSeeder::class);
        $this->call(ProductTranslationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProxypayPaymentsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RoleTranslationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SearchesTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(TaxesTableSeeder::class);
        $this->call(TicketRepliesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UploadsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(WalletsTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
        $this->call(OtpConfigurationsTableSeeder::class);
        $this->call(SmsTemplatesTableSeeder::class);
    }
}
