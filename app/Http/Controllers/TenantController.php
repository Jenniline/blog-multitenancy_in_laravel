<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;


class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tenants = Tenant::all();
        return view('tenants.index',['tenants'=> $tenants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //to show a form to create a new post  
         return view('tenants.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tenant = new Tenant;
        $tenant->name = $request->name;
        $tenant->url = $request->url;
        $tenant->save();
        $db_name =  "tenant_" . $request->url;
        DB::statement("CREATE DATABASE ".$db_name.";");   

        Config::set('database.connections.mysql_user', array(
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => $db_name,
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            ));                  

        Artisan::call('migrate', array('--database'=>'mysql_user'));
        Artisan::call('db:seed', array('--database'=>'mysql_user'));
        return redirect('/tenants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {
        Config::set('database.connections.mysql_user', array(
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => "tenant_".$tenant->url,
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            ));                  
         $connection =  DB::connection('mysql_user');
         $tenants = $connection->select(DB::raw("SELECT * FROM tenants"));
        //  $tenants = Tenant::all();
         return view('tenants.show',['tenants'=>$tenants,'tenant'=>$tenant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
