<?php

namespace Tests\Unit\Api\Admin;

use App\Models\Vendor;
use App\Repositories\Admin\VendorRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class VendorTest extends TestCase
{
    use RefreshDatabase;

    protected VendorRepository $repository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new VendorRepository();
    }

    #[Test]
    public function it_can_store_a_vendor()
    {
        $data = [
            'name' => 'Stored Vendor',
            'email' => 'store@example.com',
            'phone' => '0123456789',
            'company_name' => 'Store Co',
            'address' => 'Storage City',
            'status' => 'pending',
            'commission' => '10.00',
            'business_license_number' => '12345678',
        ];

        $vendor = $this->repository->store($data);

        $this->assertInstanceOf(Vendor::class, $vendor);
        $this->assertDatabaseHas('vendors', ['email' => 'store@example.com']);
    }

    #[Test]
    public function it_can_find_a_vendor_by_id()
    {
        $vendor = Vendor::create([
            'name' => 'Find Me',
            'email' => 'find@example.com',
            'phone' => '1231231234',
            'company_name' => 'Finders Inc',
            'address' => 'Hidden Lane',
            'status' => 'approved',
            'commission' => '15.00',
            'business_license_number' => '87654321',
            'password' => bcrypt('password'),
        ]);

        $found = $this->repository->findById($vendor->id);

        $this->assertEquals($vendor->id, $found->id);
    }

    #[Test]
    public function it_can_update_a_vendor()
    {
        $vendor = Vendor::create([
            'name' => 'Before Update',
            'email' => 'update@example.com',
            'phone' => '0000000000',
            'company_name' => 'Old Co',
            'address' => 'Old Town',
            'status' => 'pending',
            'commission' => '12.00',
            'business_license_number' => '11112222',
            'password' => bcrypt('password'),
        ]);

        $updated = $this->repository->update(['name' => 'After Update'], $vendor);

        $this->assertEquals('After Update', $updated->name);
        $this->assertDatabaseHas('vendors', ['name' => 'After Update']);
    }

    #[Test]
    public function it_can_delete_a_vendor()
    {
        $vendor = Vendor::create([
            'name' => 'Delete Me',
            'email' => 'delete@example.com',
            'phone' => '1111111111',
            'company_name' => 'Gone Co',
            'address' => 'Remove Street',
            'status' => 'pending',
            'commission' => '5.00',
            'business_license_number' => '00009999',
            'password' => bcrypt('password'),
        ]);

        $this->repository->destroy($vendor);

        $this->assertDatabaseMissing('vendors', ['id' => $vendor->id]);
    }

    #[Test]
    public function it_can_filter_and_search_and_sort_vendors()
    {
        Vendor::create([
            'name' => 'Alpha',
            'email' => 'alpha@example.com',
            'phone' => '9999999999',
            'company_name' => 'Alpha Co',
            'address' => 'Address A',
            'status' => 'approved',
            'commission' => '25.00',
            'business_license_number' => '11112222',
            'password' => bcrypt('password'),
        ]);

        Vendor::create([
            'name' => 'Beta',
            'email' => 'beta@example.com',
            'phone' => '8888888888',
            'company_name' => 'Beta Co',
            'address' => 'Address B',
            'status' => 'pending',
            'commission' => '30.00',
            'business_license_number' => '33334444',
            'password' => bcrypt('password'),
        ]);

        $request = new Request([
            'search' => 'Alpha',
            'status' => 'approved',
            'sortBy' => 'name',
            'sortDirection' => 'asc',
        ]);

        $results = $this->repository->get($request);

        $this->assertCount(1, $results);
        $this->assertEquals('Alpha', $results->first()->name);
    }
}
