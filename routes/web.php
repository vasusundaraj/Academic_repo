<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/emailtemplate/','App\Http\Controllers\EmailtemplateController@index') ;
Route::get('/emailtemplate/edit/{id}','App\Http\Controllers\EmailtemplateController@edit') ;
Route::get('/emailtemplate/show/{id}','App\Http\Controllers\EmailtemplateController@show') ;
Route::get('/emailtemplate/create','App\Http\Controllers\EmailtemplateController@create') ;
Route::post('/emailtemplate/store','App\Http\Controllers\EmailtemplateController@store') ;
Route::post('/emailtemplate/update/{id}','App\Http\Controllers\EmailtemplateController@update') ;
Route::post('/emailtemplate/delete/{id}','App\Http\Controllers\EmailtemplateController@destroy') ;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/jobs', function () {
    $microsoft_jd = "Microsoft is on a mission to empower every person and every organization on the planet to achieve more. Our culture is centered on embracing a growth mindset, a theme of inspiring excellence, and encouraging teams and leaders to bring their best each day. In doing so, we create life-changing innovations that impact billions of lives around the world. You can help us to achieve our mission. To learn more please visit: https://careers.microsoft.com/mission-culture

                                    Responsibilities

                                    We value people who can bring a diverse perspective to our product and where a developer will not just write code, but will have a real meaningful impact on the direction of the product and which features to build. We are building a team where diversity of thought and background is valued as strongly as technical skills, and where everyone is encouraged to come up with new ideas to make our customers’ lives better.

                                    We are looking for talented early to mid-career Software Engineers to help us deliver highly scalable services and world-class product experiences. You will have opportunities to work on multiple layers of the technology stack, ranging from customer-focused user experience work, building scalable distributed cloud services, working with big data, machine learning, and everything in between. You will learn how to design services and experiences that are required to work around the globe. You will collaborate with team members and other engineering groups in Microsoft to build full stack web applications and services using the latest web technologies in a dynamic and agile environment. You will be part of a fun-loving, diverse team that seeks challenges, loves learning and values teamwork. You will have opportunities for mentorship, career growth, and work on high-business impact areas.

                                    By applying to this position, you are being considered for multiple like positions within our organization for an invitation-only virtual Interview . Position specifics, including hiring team, location, and position details will be determined following the interview process.

                                    Qualifications

                                    Basic Qualifications:
                                    2+ years of experience with one or more general purpose programming languages including but not limited to: Java, C/C++, C#, Python, JavaScript, PowerShell
                                    BSc in Computer Science or related technical field experience

                                    Preferred Qualifications
                                    Experience running and working on services at scale
                                    Experience in developing, debugging and maintaining code in object oriented languages and database querying languages.
                                    Strong coding, debugging, algorithm design and problem solving skills.

                                    May include: Ability to meet Microsoft, customer and/or government security screening requirements. These requirements include, but are not limited to the following specialized security screenings:
                                    Microsoft Cloud Background Check: This position will be required to pass the Microsoft Cloud background check upon hire/transfer and every two years thereafter.

                                    Microsoft is an equal opportunity employer. All qualified applicants will receive consideration for employment without regard to age, ancestry, color, family or medical care leave, gender identity or expression, genetic information, marital status, medical condition, national origin, physical or mental disability, political affiliation, protected veteran status, race, religion, sex (including pregnancy), sexual orientation, or any other characteristic protected by applicable laws, regulations and ordinances. We also consider qualified applicants regardless of criminal histories, consistent with legal requirements. If you need assistance and/or a reasonable accommodation due to a disability during the application or the recruiting process, please send a request via the Accommodation request form.

                                    Benefits/perks listed below may vary depending on the nature of your employment with Microsoft and the country where you work.
                                    Industry
                                    Computer Hardware  Computer Software  Information Technology & Services";
    $apple_jd =

        "Imagine what you could do here. At Apple, new ideas have a way of becoming great products, services, and customer experiences very quickly. Bring passion and dedication to your career and there's no telling what you could accomplish.


The Information Systems & Technology organization produces key business and technical infrastructure at Apple handling orders from the online store, building applications that improve the retail store experience, providing network bandwidth for our services around the world, processing every transaction in iTunes, and closing the books. We do it all. If you are a born problem solver who enjoys collaborating on the next big thing, we may just have your dream job.


From Apple ID to the Apple website to our data centers around the globe, IS&T manages the massive systems and services that so many rely on. They also build the custom tools that empower our employees to solve problems on their own. And that means these engineers are free to do what engineers do best - explore all of technology’s possibilities.


Key Qualifications

Proficient programming knowledge in at least one of the following areas: Server side development (Java), Web development (JavaScript, HTML, CSS3) or iOS development (Objective-C, Swift)

Related software engineering internship or job experience

Excellent quantitative and interpersonal skills

Leadership experience

Less than 12 months of full-time work experience in the role you are applying for


Description

Within IS&T, there are a variety of software engineering positions available across many different teams, ranging from special projects for new business initiatives to operations in a rapidly growing and dynamic setting. The IS&T Early Career Development Program (ECDP) is for people with less than 12 months of relevant experience in their position and provides employees with the opportunity to build community amongst themselves by attending educational and social events.


Examples of positions:

A majority of our positions are Software Engineers such as iOS, front-end, back-end  and full-stack

Database Engineer

DevOps Engineer

Engineering Project Manager

Machine Learning Engineer

Quality Engineer

Security Engineer


Teams that are hiring include:

Applied Machine Learning

Corporate Systems

Customer Systems

Employee Systems

Enterprise and Retail Networking

Global Business Intelligence

Infrastructure Systems

Partner Solutions and Tech

Product Engineering Systems

Retail Engineering

SAP Global Systems


Most of our positions are based Austin, Texas and occasionally we have some located in Dallas, TX, Sunnyvale, CA, Elk Grove, CA., or Seattle, WA.


Education & Experience

Bachelors degree in CS, CE, ECE, EECS, IS, IT and other related fields of study


Role Number: 200225930";

    $google_jd = "Note: By applying to this position your application is automatically submitted to the following locations: Mountain View, CA, USA; Seattle, WA, USA

Minimum qualifications:
Bachelor's degree or equivalent practical experience.
Program management experience within design or UX organizations.
Experience with UX design, user research, and/or user centered development tools and processes.


Preferred qualifications:
5 years of relevant industry experience.
Working knowledge of project management software, spreadsheets, Google Docs.
Excellent communication, presentation and analytical skills, and ability to communicate complex interaction concepts clearly and persuasively across different audiences and varying levels of the organization.
Effectiveness in working across organizational boundaries to define, manage, and prioritize work.


About the job
At Google, we follow a simple but vital premise: \"Focus on the user and all else will follow.\" UX Programs & Operations at Google drive projects within our UX organizations by increasing communication and connection points, streamlining the UX design process, and driving a culture of user centered development.

Google User Experience (UX) is made up of multi-disciplinary teams of UX Designers, Researchers, Writers, Content Strategists, Program Managers, and Engineers: we care deeply about the people who use our products. The UX team plays an integral part in gathering insights about the attitudes, emotions, and behaviors of people who use our products to inspire and inform design. We collaborate closely with each other and with engineering and product management to create industry-leading products that deliver value for the people who use them, and for Google’s businesses.

As a UX Program Manager (UX Programs & Operations), you will combine expert project management skills with a passion for user experience to help your team improve the design of products that are used by billions of users. You’ll plan projects, define milestones, assess risks, create actionable insights, and ensure projects meet deadlines. You’ll harmonize the work of UX Designers, Researchers, Content Strategists, UX Engineers, and other UX disciplines, while also working closely with our Engineering and Product Manager cross-functional partners, to drive UX team objectives and create innovative experiences for our business, products, and users.
User experience is at the forefront of how we create intuitive, innovative, and beautiful products that people love. We strive to learn and understand our users’ needs, behaviors, and emotions to gather insights that inform product strategy and design. Our UX teams include designers, researchers, content strategists, and engineers who are passionate about quality, usability, and simplicity. We work on collaborative teams to solve complex challenges and craft experiences that highlight our products’ unique capabilities and personalities. Our work touches billions while exemplifying a key principle that is core to Google’s philosophy: “Focus on the user and all else will follow.”

Responsibilities

Provide leadership and operational excellence across UX teams to deliver the highest level of trust-building and strategic counsel through all project interactions.
Utilize your deep understanding of the UX craft, methodologies, and/or analytics to build programs that scale across teams and allow UXers to do their best work.
Act as a representative for UX in cross-functional collaborations with Engineering and Product Management (PM) teams, connecting all three groups and making sure interdependencies are understood and planned for.
Identify team needs with regards to process, tools, documentation, and asset management, driving required changes to make sure UXers are working at optimum efficiency.
Lead and collaborate with UX team leadership in key project decision-making and orchestrate successful delivery for multiple UX related projects simultaneously.


Google is proud to be an equal opportunity workplace and is an affirmative action employer. We are committed to equal employment opportunity regardless of race, color, ancestry, religion, sex, national origin, sexual orientation, age, citizenship, marital status, disability, gender identity or Veteran status. We also consider qualified applicants regardless of criminal histories, consistent with legal requirements. See also Google's EEO Policy and EEO is the Law. If you have a disability or special need that requires accommodation, please let us know by completing this form .";
    $pay_range = "Est. Pay Range :";
    $employment_type = "Employment Type :";
    return view('admin.jobs', ['microsoft_jd' => $microsoft_jd, 'apple_jd' => $apple_jd,
        'google_jd' => $google_jd, 'pay_range' => $pay_range, 'employment_type' => $employment_type]);
});


Route::get('/jobs/candidate_pool', array('uses' => 'App\Http\Controllers\CandidatePoolController@index', 'as' => 'candidatepool'));

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('sendemail/send', 'App\Http\Controllers\SendEmailController@send');
