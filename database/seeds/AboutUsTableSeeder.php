<?php

use Illuminate\Database\Seeder;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\AboutUs::create( [
            'title' => "WE CREATE DIGITAL EXPERIENCES",
            'description' => "DreamsTech is a market of IT development and services focuses on giving best to their clients and customers with 100% satisfaction results with honesty and truthful manners so that we build a strong customer relationship.",
            'link_id' => "2",
        ]);

        \App\AboutUs::create( [
            'title' => "We Are Here For Made Your Idea",
            'description' => "An idea without digitization is a myth now; for Software Development Services let you digitize your ideas into true genres of technology and innovation; Software Development Company in Lahore bring digital life to your brain-native ideas, providing you with the highest quality Software, Graphics, Website and SEO services.",
            'link_id' => "2",
        ]);

        \App\AboutUsBodySection::create( [
            'title' => "MAINTAINANCE",
            'description' => "IT Support Companies in Lahore provide each customer with a tailored IT Support & Maintenance solution that ensures your IT system is resilient, safe and affordable with room to expand as and when your company grows.",
            'image_url'=>"1555188092_1.png",
            'link_id' => "2",
        ]);

        \App\AboutUsBodySection::create( [
            'title' => "IT SECURITY",
            'description' => "Cyber Security Companies in Lahore ensuring antivirus software updates and other security updates are installed.",
            'image_url'=>"1555188102_2.png",
            'link_id' => "2",
        ]);

        \App\AboutUsBodySection::create( [
            'title' => "BACKUP AND RECOVERY",
            'description' => "Data Recovery Services Lahore is creating data backup solutions with file retention policies, either offsite or onsite – or both.",
            'image_url'=>"1555188112_3.png",
            'link_id' => "2",
        ]);


        \App\AboutUsBodyExperienceSection::create( [
            'title' => "Project Successfull",
            'value' => 250,
            'image_url' => "1555191087_001-review.png",
            'link_id' => "2",
        ]);

        
        \App\AboutUsBodyExperienceSection::create( [
            'title' => "Expert Consultants",
            'value' => 370,
            'image_url' => "1555190206_002-opinion.png",
            'link_id' => "2",
        ]);


        
        \App\AboutUsBodyExperienceSection::create( [
            'title' => "Team Members",
            'value' => 150,
            'image_url' => "1555190221_003-ads.png",
            'link_id' => "2",
        ]);

        
        \App\AboutUsBodyExperienceSection::create( [
            'title' => "Clients",
            'value' => 70,
            'image_url' => "1555190763_004-office.png",
            'link_id' => "2",
        ]);

        \App\AboutUsBodyExperienceRightSection::create( [
            'title' => "Market Research",
            'value' => 95,
            'link_id' => "2",
        ]);

        \App\AboutUsBodyExperienceRightSection::create( [
            'title' => "Sales Services",
            'value' => 90,
            'link_id' => "2",
        ]);

        \App\AboutUsBodyExperienceRightSection::create( [
            'title' => "Strategic Consulting",
            'value' => 85,
            'link_id' => "2",
        ]);


        \App\AboutUsBodyExperienceProcessSection::create( [
            'head_title' => "Our Process",
            'head_description' => "We make process work.",
            'link_id' => "2",
        ]);

        \App\AboutUsBodyExperienceProcessBodySection::create([
            'title' => "ANALYZE",
            'description' => "Our First stage Consist of Project Analyzing . Our Analyzing Team analyze a System before designing phase for Clients Satisfaction",
            'link_id' => "2",
        ]);

        
        \App\AboutUsBodyExperienceProcessBodySection::create([
            'title' => "DESIGN",
            'description' => "Our Design Phase Consist of Project Designing . Our Design Team sketch up a Business Models & Custom Designs for Clients Satisfaction .",
            'link_id' => "2",
        ]);

        
        \App\AboutUsBodyExperienceProcessBodySection::create([
            'title' => "DEVELOP",
            'description' => "Our Development Phase comes after Designing Phase of Websites or Software. In this Phase clients get the Developed Full featured software's ,graphics,videos, or any service we provide.",
            'link_id' => "2",
        ]);

        
        \App\AboutUsBodyExperienceProcessBodySection::create([
            'title' => "SUPPORT",
            'description' => "We provide the 24/7 support.",
            'link_id' => "2",
        ]);
    }
}
