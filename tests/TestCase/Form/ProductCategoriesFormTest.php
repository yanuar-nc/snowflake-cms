<?php
namespace App\Test\TestCase\Form;

use App\Form\ProductCategoriesForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ProductCategoriesForm Test Case
 */
class ProductCategoriesFormTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->ProductCategories = new ProductCategoriesForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductCategories);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
