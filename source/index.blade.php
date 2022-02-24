@extends('_layouts.main')

@section('body')
<section class="-mb-1 flex justify-center items-center"
    style="background-image: url('assets/images/grass.png'), linear-gradient(to top right,
    #63b0dc, #a6e3ff), linear-gradient(to right top, rgb(99, 176, 220), rgb(166, 227, 255)); background-position: bottom; background-repeat: no-repeat; background-size: contain;">
    <div class="max-w-6xl py-32 px-14 mb-18 md:mb-52 mx-auto md:grid grid-cols-2 lg:flex items-center gap-10 md:gap-14">
        <div class="flex-auto w-full">
            <img class=" max-h-lg p-3" src="assets/images/logo.png" alt="Education Transformation Centre Logo"
                class="logo">
        </div>

        <ul class="flex-1 p-5 pl-8 mt-8 list-disc text-2xl md:mt-10 text-gray-700">
            <li>Growth</li>
            <li>Transformation</li>
            <li>Achievement</li>
        </ul>
    </div>
</section>
<section class="text-center bg-brown-dark text-white">
    <div class="container py-5">
        <p>
            We endeavor to create an atmosphere of “relaxed alertness” where there
            is a combination of high challenge and high expectations in a low threat
            learning community; and a state of mind that combines confidence,
            competence and intrinsic motivation (Cainelearning.com).
        </p>
    </div>
</section>
<section class="py-1 pb-16 bg-cover" style="background-image: url('assets/images/about.jpg');">
    <div class="container">
        <div class="">
            <h2>About</h2>
            <p>
                The Education Transformation Centre is an alternate education course,
                designed to prevent encounters with the justice system and reduce
                frequent instances of detention and suspension.
            </p>
        </div>
        <div class="">
            <h3>Services</h3>
            <p>
                ETC's therapeutic mental health services include mental health
                assessments, person-centered service planning, therapeutic
                activities, parent consultations/psycho-educational training,
                teacher collaboration and service/program evaluation.
            </p>
            <p>
                ETC provides a therapeutic environment where students participate in psycho educational and
                counseling groups that supplement the traditional academic activities.
            </p>
            <a class="btn"
                href="https://docs.google.com/forms/d/e/1FAIpQLSeszndZgec9EjftnetdWlDE2HW6VjqX_X4O7t277JsdIE8sUg/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0">Counseling
                Application</a>
            <a class="btn"
                href="https://docs.google.com/forms/d/e/1FAIpQLSdArp8Ev_HeDlviS_4vhSz0RDfRcJnU1g0gRFqMX05ADX1Pnw/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0">Academic
                Consultation Services</a>
        </div>
        <div class="section">
            <h3>Team</h3>
            <p>
                ETC’s integrative approach includes a team of educators, clinical mental health counselors,
                qualified mental health providers, parents, and community mentors.
            </p>
        </div>
    </div>
</section>

<section class="py-10 mb-14 text-center bg-green text-white">
    <div class="container">
        <div class="">
            <h2 class="mt-0">Who We Serve</h2>
            <p>
                Charlottesville City Public Schools, Counties of Albemarle, Buckingham,
                Fluvanna, Greene, Louisa, Nelson
            </p>
            <img class="max-w-xl w-full mx-auto mt-10 rounded-lg shadow-xl" src="assets/images/student-studying.jpg"
                alt="teacher working with student">
        </div>
    </div>
</section>

<section class="curriculum block">
    <div class="container">
        <div class="section">
            <h2>Curriculum</h2>
        </div>
        <div class="section">
            <h3>Model</h3>
            <p>
                Our integrative and alternative education model is designed to eliminate the stigma of utilizing
                mental health services. Its seamless clinical learning model fosters emotional self-efficacy while
                building essential life skills.
            </p>
        </div>

        <div class="section">
            <h3>Outcomes</h3>
            <p>
                Collaboration with host schools will facilitate a bridge for a
                student's return full-time to the traditional setting once
                mental health goals are met or an intensive level of services
                are no longer needed.
            </p>
        </div>
        <img class="max-w-xl w-full mx-auto mt-10 rounded-lg shadow-lg" src="assets/images/outcomes.jpg"
            alt="Group of students graduating" class="rounded small center" id="outcomes-img">
        <section class="py-10 my-10">
            <div class="container text-center">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-2 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>Funding Sources
                </h2>
                <p>We accept CSA, Private Insurance, and Direct Payments.</p>
            </div>
        </section>
    </div>
</section>

<section class="py-10 mt-14 bg-green text-white" x-data="{ open: false }">
    <div class="container">
        <h2 class="mt-0 text-center">Testimonials</h2>
        <x-testimony name="STARS" name="Rydell Payne" title="from STARS">
            <img class="max-w-lg w-full mx-auto" src="assets/images/stars-logo.png" alt="STARS logo">
            <p>
                Here at STARS (Structured Therapeutic Adolescent Residential Services) we serve youth 13-18 years
                old
                who
                have
                experienced various traumas, losses, and abuse; however, they can show a lot of resilience and live
                successfully. Education Transformation Centre (ETC) under Dr. Carr's leadership was able to
                establish
                rapport with our
                youth quickly where respect and hope was at the core of their services from the beginning to end.
            </p>
            <p>
                Dr. Carr certainly has a lot of expertise in serving our population, in addition, the two interns,
                displayed
                incredible
                energy and patience to connect with our residents. Residents expressed that they felt
                heard, trusted, and respected by the ETC team. On this foundation, ETC was able to help our
                residents
                unearth their
                potential thereby increasing their resolve to be successful and looking at how current behaviors
                dampen
                their progress
                toward reaching current program goals.
            </p>
            <p>
                What impressed us the most was the ability of ETC staff to provide programing that kept residents
                engaged at
                least 90% of the time during a three-hour program, three days a week that was creative, relevant,
                and
                inspiring. The
                first
                week of the program, we heard staff remarking, "we need to hire them now for next year," later STARS
                staff
                were asking
                the question "how do we get them involved with our youth during the school year" and the final week
                staff
                expressing "we gotta have them back next year."
            </p>
            <p>
                We are grateful for the vast efforts of ETC to get community speakers involved that could reinforce
                a
                consistent
                message that you matter, you deserve respect, and you are to respect others.
            </p>
            <p>
                Finally, ETC did an excellent job of celebrating our youth by having them decorate their space with
                positive
                affirmations,
                putting on a talent show and a business casual lunch at the Omni Hotel where they learned social
                etiquette.
                Honestly,
                our staff did not do anything terribly wrong, but the residents may have behaved better than we did.
                They
                were well
                prepared by ETC. At these events, residents had a voice to express their personal gratitude towards
                the
                STARS staff as
                well.
            </p>
            <p>We highly recommend ETC's services without any reservations.</p>
        </x-testimony>
        <div class="text-center mt-5"><button class="btn-white" x-show="!open" @click="open = true">Read
                More</button></div>
        <div x-show="open">
            <x-testimony name="Adrainne Johnson" title="Parent, AHS">
                <p>
                    I would like to share my experience working with Education Transformation Centre (ETC).
                    First I would like to say, the staff was very supportive of the child. They are very great
                    with making sure the kids get an education. They also go above and beyond, if the student
                    needs more assistance, Dr. Carr will get the student tutors for more one on one.
                </p>
                <p>
                    Education Transformation Centre makes sure the students achieve their goals that will get
                    the student back into the regular school setting and for adulthood. My daughter used to be
                    upset that she had to go through the program. After she got the understanding of the
                    program, she starting accepting the things she had to do was only going to make her become
                    successful in life. ETC will continued to follow the student till graduation.
                </p>
                <p>
                    So, my message to students and parents is ETC is a great program, I highly recommend it. My
                    daughter was struggling in math, ETC made her struggle come to ease. My daughter will be a
                    graduate with her class of 2021.
                </p>
            </x-testimony>
            <x-testimony name="Deborah Parker">
                <p>
                    I was impressed by the encouragement and support that was given to our grandson during
                    the short time that he was enrolled there. He did not complete due to COVID-19. I felt
                    that ETC was a good fit for him at that time because he was struggling in school. The
                    ETC allowed him to work on his academics in a smaller setting as well as work on his
                    behavior modification.
                </p>
                <p>
                    I believe that the ETC will give students who just don’t fit in the mainstream school, a
                    head start on their road to a successful educational experience.
                </p>
                <p>
                    Dr. Carr was always professional, informative and guided us through the enrollment
                    process. She also followed up on his progress after the COVID shutdown. She continued to
                    encourage him to be the best that he could be.
                </p>
                <p>
                    I recommend that if your child is having difficulties in school and need one on one
                    attention, take the time to check out what the Educational Transformation Centre can
                    offer.
                </p>
            </x-testimony>
            <x-testimony name="Shelley Faulkner M.A., Ed.S." title="Trauma Counselor" subtitle="ReadyKids">
                <p>
                    Dr. Carr was a steadfast presence in my client's life which I feel helped her to
                    see more positive possibilities for her future. Dr. Carr provided my
                    client with individualized and focused support that she needed during a challenging
                    time in her life. This extra support helped to scaffold my client's sense of
                    what a trustworthy relationship looks and feels like.
                </p>
                <p>
                    I believe that putting in the extra time and effort often help children/students to feel
                    that they really do matter and that their life is meaningful and worthwhile. Being a
                    constant, honest and present adult, helps to create trust in the
                    relationship between adult and child. Young people need to learn what a safe
                    and trusting relationship and I was able to witness Dr. Carr be that person for my
                    client. Dr. Carr's guidance through the positive seeds planted by the Education
                    Transformation Centre, will have lasting effects on my client's life,
                    whether she sees/feels it now or in her future.
                </p>
                <p>
                    All the best Dr. Carr and I hope to work with you again very soon. I love what you are
                    doing!
                </p>
            </x-testimony>
            <x-testimony>
                <div class="grid max-w-lg md:max-w-none mx-auto md:grid-cols-2 gap-5 mb-5">
                    <div class="w-2/3 md:w-full">
                        <img class="rounded-lg shadow-xl" src="assets/images/card-01-front.jpg"
                            alt="front of the card from Nancy">
                    </div>
                    <div class="relative -top-28 md:top-0 w-2/3 md:w-full ml-auto md:mx-auto -mb-28 md:mb-0">
                        <img class="rounded-lg shadow-xl" src="assets/images/card-01-back.jpg"
                            alt="back of the card from Nancy">
                    </div>
                </div>
            </x-testimony>
            <x-testimony>
                <div class="grid max-w-lg md:max-w-none mx-auto md:grid-cols-2 gap-5 mb-5">
                    <div class="w-2/3 md:w-full">
                        <img class="rounded-lg shadow-xl" src="assets/images/card-02-front.jpg"
                            alt="front of the thank you card">
                    </div>
                    <div class="relative -top-28 md:top-0 w-2/3 md:w-full ml-auto md:mx-auto -mb-28 md:mb-0">
                        <img class="rounded-lg shadow-xl" src="assets/images/card-02-back.jpg"
                            alt="back of the thank you card">
                    </div>
                </div>
            </x-testimony>
        </div>
    </div>
</section>
<section class="py-10 my-10">
    <div class="container">
        <div class="md:grid md:grid-cols-4 gap-10">
            <div class="md:mt-5">
                <img class="mx-auto w-1/2 md:w-full md:ml-0 rounded-lg shadow-xl" src="assets/images/dolores-carr.jpg"
                    alt="Dr. Dolores Carr">
            </div>
            <div class="col-span-3">
                <h2 class="md:mt-3">Meet the Founder</h2>
                <p>Dr. Dolores Carr is friendly, caring, and with over 20 years of public teaching, she has an
                    overwhelming
                    wealth
                    of
                    knowledge and experience in transforming student's lives.</p>
                <x-quote cite="Dolores Carr">
                    My goal is to assist students in finding their passion, then provide education options with choices
                    matched for each
                    individual student.
                </x-quote>
            </div>
        </div>
    </div>
</section>

@endsection