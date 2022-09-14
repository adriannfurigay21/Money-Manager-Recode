<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $timestamp = Carbon::now()->format('Y-m-d H-i-s');

        //user create
        // DB::statement( 
            
        //     "INSERT INTO users (username, password, created_at, updated_at)
        //             VALUES (?,?,?,?)
        //     ",
        //     ['leo', '123123', $timestamp, $timestamp]
        // );

        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Food', 'Expense', $timestamp, $timestamp]
        );

        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Social', 'Expense', $timestamp, $timestamp]
        );
       
        
        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Transpo', 'Expense', $timestamp, $timestamp]
        );

        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Household', 'Expense', $timestamp, $timestamp]
        );

        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Salary', 'Income', $timestamp, $timestamp]
        );

        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Allowance', 'Income', $timestamp, $timestamp]
        );

        DB::statement( 
            "INSERT INTO categories (name, type, created_at, updated_at)
                    VALUES (?,?,?,?)
            ",
            ['Petty Cash', 'Income', $timestamp, $timestamp]
        );


        DB::statement( 
            "INSERT INTO accounts (name, type, note, created_at, updated_at)
                    VALUES (?,?,?,?,?)
            ",
            [ 'Adriann', 'personal', 'for personal', $timestamp, $timestamp]
        );

        DB::statement( 
            "INSERT INTO accounts (name, type, note, created_at, updated_at)
                    VALUES (?,?,?,?,?)
            ",
            ['Lee', 'savings', 'for future', $timestamp, $timestamp]
        );
    }
}
