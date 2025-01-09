<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');

        // Define 50 needs and their corresponding descriptions
        $needs = [
            'Food and Groceries' => 'Need help buying groceries and essential food items for the family.',
            'Medical Assistance' => 'Urgently need funds for surgery and medication for a family member.',
            'Shelter or Rent' => 'Require support to pay rent after losing a job.',
            'Clothing' => 'Seeking assistance to purchase clothes for children and elderly parents.',
            'Educational Support' => 'Looking for help to pay school fees for the upcoming term.',
            'Debt Relief' => 'Struggling with overwhelming debts and need financial aid.',
            'Transportation Fees' => 'Need help with daily transport costs to get to work.',
            'Job Opportunities' => 'Looking for resources to attend training for better job opportunities.',
            'Access to Clean Water' => 'Require funds to access clean drinking water for the family.',
            'Mental Health Support' => 'Seeking help for therapy and mental health counseling.',
            'Legal Aid' => 'Need legal assistance for a case involving family matters.',
            'Support for Addiction Recovery' => 'Raising funds to support recovery from substance abuse.',
            'Electricity Bills' => 'Unable to pay overdue electricity bills due to financial challenges.',
            'Gas or Fuel' => 'Require funds to purchase cooking gas for the household.',
            'Emergency Travel Expenses' => 'Need help with urgent travel expenses for a funeral.',
            'Childcare Support' => 'Seeking financial aid for daycare services to enable work attendance.',
            'Elderly Care Assistance' => 'Require funds to hire a caregiver for an elderly relative.',
            'Support for Natural Disaster Recovery' => 'Raising funds to rebuild after a flood.',
            'Internet Access for Education' => 'Need help affording internet for children’s online classes.',
            'Technology for Remote Work' => 'Looking for assistance to purchase a laptop for remote work.',
            'Funeral Expenses' => 'Raising funds to cover funeral costs for a loved one.',
            'Access to Affordable Housing' => 'Seeking financial aid for affordable housing options.',
            'Agricultural Support' => 'Need funds to buy seeds and equipment for farming.',
            'Youth Empowerment Programs' => 'Raising funds to organize skill-building workshops for youth.',
            'Scholarship Funding' => 'Looking for help to secure a scholarship for higher education.',
            'Community Development Projects' => 'Seeking resources to improve local community facilities.',
            'Environmental Conservation' => 'Raising funds to plant trees and conserve the environment.',
            'Animal Welfare Support' => 'Need funds to care for abandoned animals in the area.',
            'COVID-19 Relief Support' => 'Raising money to provide relief items for COVID-19-affected families.',
            'Sanitation and Hygiene' => 'Looking for funds to build better sanitation facilities.',
            'Digital Literacy Training' => 'Need support to train individuals in basic computer skills.',
            'Vocational Training' => 'Seeking financial aid for vocational training for unemployed individuals.',
            'Marriage Assistance' => 'Raising funds to cover wedding ceremony expenses.',
            'Flood Recovery' => 'Need help rebuilding a home destroyed by flooding.',
            'Substance Abuse Counseling' => 'Looking for resources to support addiction counseling programs.',
            'Rehabilitation for Homeless' => 'Need funds to provide temporary shelter for homeless individuals.',
            'Clean Energy Initiatives' => 'Raising funds to install solar panels in a rural community.',
            'Support for Orphanages' => 'Need help to buy supplies for a local orphanage.',
            'Safety Equipment' => 'Raising money to provide safety gear for workers in dangerous jobs.',
            'Literacy Programs' => 'Looking for funds to set up adult literacy classes.',
            'Child Education Fund' => 'Seeking resources to sponsor education for underprivileged children.',
            'Domestic Violence Support' => 'Raising money to help victims of domestic violence.',
            'Sports Equipment' => 'Need funds to purchase sports equipment for a local youth team.',
            'Support for Art Programs' => 'Looking for help to fund art programs for talented youth.',
            'Disaster Relief' => 'Raising money to assist families affected by recent natural disasters.',
            'Healthcare for Disabled' => 'Seeking resources to provide healthcare for individuals with disabilities.',
            'Job Training for Women' => 'Looking for funds to provide skill training for women in need.',
            'Veterinary Care' => 'Need support for veterinary services for injured animals.',
        ];

        $maxUserId = DB::table('users')->max('id');

        foreach (range(1, 100) as $index) {
            // Randomly select a need and its corresponding description
            $title = $faker->randomElement(array_keys($needs));
            $description = $needs[$title];

            DB::table('purposes')->insert([
                'title' => $title,
                'description' => $description,
                'user_id' => $faker->numberBetween(1, $maxUserId),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}