@extends('layouts.landing')

@section('content')
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="custom-section bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          About Us
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
          <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
              <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">IA-Lab (Internet Accelerator Laboratory) is a cutting-edge educational institution that leverages the power of the internet to provide innovative and immersive learning experiences. We are dedicated to redefining education by embracing advanced technologies, personalized learning, expert instructors, and a vibrant community.</p><br>
              <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">At IA-Lab, we believe that education should not be limited by physical boundaries. Through our flexible and dynamic virtual classroom, accessible to students worldwide, we offer a transformative learning environment that breaks down traditional barriers. Students can engage in interactive lessons, collaborate with peers, and explore subjects with expert guidance, all from the comfort of their own homes.</p>
            </div>
            <div class="w-full lg:w-8/12 flex justify-center items-center">
              <img class="w-full h-auto" src="/img/aboutus.webp" alt="A group of People" />
            </div>
          </div>
          <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
              <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Our Story</h1>
              <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">IA-Lab (Internet Accelerator Laboratory) is the culmination of the final project by Azhar Abdul A'la, a student of Instrumentation Electronics at the Indonesian Polytechnic of Nuclear Technology. With the guidance of Mr. Halim Hamadi and Mr. Taxwim, Azhar successfully completed the project, showcasing his dedication and passion for advancing the field of internet acceleration in education.</p>
            </div>
            <div class="w-full lg:w-8/12 lg:pt-8 flex justify-center items-center">
              <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                <div class="p-4 pb-6 flex justify-center flex-col items-center">
                    <img class="md:block hidden" src="/img/azhar.webp" alt="Azhar Image" />
                    <img class="md:hidden block" src="/img/azhar.webp" alt="Azhar Image" />
                    <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Azhar</p>
                    <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">(Developer)</p>
                </div>
                <div class="p-4 pb-6 flex justify-center flex-col items-center">
                    <img class="md:block hidden" src="/img/halim.webp" alt="Halim Image" />
                    <img class="md:hidden block" src="/img/halim.webp" alt="Halim Image" />
                    <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Halim</p>
                    <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">(Supervisor 1)</p>
                </div>
                <div class="p-4 pb-6 flex justify-center flex-col items-center">
                    <img class="md:block hidden" src="/img/taxwim.webp" alt="Taxwim Image" />
                    <img class="md:hidden block" src="/img/taxwim.webp" alt="Taxwim Image" />
                    <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Taxwim</p>
                    <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">(Supervisor 2)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
              <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Vision</h1>
              <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Our vision is to revolutionize the way education is delivered by providing innovative and immersive learning experiences that leverage the power of the internet. We aim to transform traditional learning methods and harness the full potential of technology to create a dynamic and engaging virtual classroom environment. By embracing advanced technologies and instructional design principles, we strive to deliver educational experiences that are interactive, personalized, and accessible to students worldwide. Through our visionary approach, we aspire to empower learners of all backgrounds to thrive in the digital age and prepare them for the challenges and opportunities of the future.</p>
            </div>
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
              <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Mission</h1>
              <ul class="list-disc list-inside">
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Provide a flexible and dynamic learning environment for students worldwide.</li>
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Offer an easily accessible virtual classroom for a wide range of learners.</li>
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Utilize advanced technologies to enhance personalized learning experiences.</li>
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Engage expert instructors dedicated to delivering excellence in education.</li>
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Foster an active and vibrant learning community.</li>
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Empower students to reach their full potential through transformative education.</li>
                <li class="font-normal text-base leading-6 text-gray-600 dark:text-white">Break down barriers and provide equal access to education in the digital age.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-landing py-8 text-gray-800">
      <div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
        <p class="text-sm font-medium tracking-wide text-center uppercase">How it works</p>
        <h2 class="mb-12 text-4xl font-bold leading-tight text-center sm:text-5xl">Frequently Asked Questions</h2>
        <div class="flex flex-col divide-y divide-gray-300 sm:px-8 lg:px-12 xl:px-32">
          <details>
            <summary class="py-2 outline-none cursor-pointer focus:underline">What is IA-Lab?</summary>
            <div class="px-4 pb-4">
              <p>IA-Lab is a website that enables users to monitor real-time data acquisition from a linear accelerator system. It provides a user-friendly dashboard featuring data acquisition graphs, instructional videos, and information about upcoming conferences organized by the admin.</p>
            </div>
          </details>
          <details>
            <summary class="py-2 outline-none cursor-pointer focus:underline">How can I access the IA-Lab dashboard?</summary>
            <div class="px-4 pb-4">
              <p>To access the IA-Lab dashboard, you need to register on the IA-Lab website. Create an account and log in using your credentials. Once you have registered, your account will need to be approved by the admin. Once your account is approved, you will gain access to the dashboard, which includes data acquisition graphs, instructional videos, and conference information.</p>
            </div>
          </details>
          <details>
            <summary class="py-2 outline-none cursor-pointer focus:underline">What are the benefits of accessing the IA-Lab dashboard?</summary>
            <div class="px-4 pb-4 space-y-2">
              <p>There are several benefits to accessing the IA-Lab dashboard:</p>
              <ul class="list-disc list-inside">
                <li>Real-time data monitoring: The dashboard provides live updates on data acquisition from the linear accelerator system, allowing users to monitor the system's performance.</li>
                <li>Instructional videos: Users can access videos that demonstrate the operation of the linear accelerator system, providing valuable insights and guidance.</li>
                <li>Conference information: The dashboard provides information about upcoming conferences organized by the admin, allowing users to stay updated on the latest developments and opportunities in the field.</li>
              </ul>
            </div>
          </details>
        </div>
      </div>
    </section>
@endsection