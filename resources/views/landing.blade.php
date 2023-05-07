@extends('layouts.landing')

@section('content')
    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">Online Accelerator Experiment</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Internet Accelerator Laboratory
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Laboratorium pendidikan berbasis internet dengan metode aplikasi pembelajaran akselerator jarak jauh.
          </p>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-3 text-center">
          <img class="w-full md:w-3/5 z-50 md:ml-60 mb-12" src="img/electron.png" />
        </div>
      </div>
    </div>
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
    <section class="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          IAL
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full xl:w-1/2 sm:w-1/2 mx-auto mt-12 my-4">
            <img class="w-full" src="img/ilustrasi.jpg">
          </div>
          <div class="w-full md:w-1/2 sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Konsep IAL
              </h3>
              <p class="text-gray-600 mb-8">
                IAL (Internet Accelerator Laboratory) merupakan laboratorium pendidikan berbasis internet dengan metode aplikasi pembelajaran akselerator jarak jauh sesuai program Teaching Laboratory. IAL dikembangkan dengan model live video webcasting berbasis smart Classroom.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              Linear Accelerator (LINAC)
            </h3>
            <p class="text-gray-600 mb-8">
              Linear accelerator (LINAC) adalah sebuah alat yang digunakan dalam bidang kedokteran, penelitian, dan industri untuk menghasilkan sinar partikel berkecepatan tinggi. LINAC bekerja dengan mengakselerasikan partikel, seperti elektron atau ion, melalui serangkaian tabung akselerator linier yang panjang. Partikel-partikel ini diberikan energi tambahan saat mereka melewati resonator radiofrekuensi yang terletak di dalam tabung akselerator. Proses ini berulang hingga partikel mencapai energi yang diinginkan.
            </p>
          </div>
          <div class="w-full sm:w-1/2 mx-auto my-4">
            <img class="w-full" src="img/simulasi.jpg">
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-11/12 sm:w-1/2 mx-auto">
            <img class="w-full my-4" src="img/mbe.jpg">
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Spesifikasi Arjuna 1.0
              </h3>
              <p class="text-gray-600 mb-4">
                Mesin Berkas Elektron (MBE) Arjuna 1.0 memiliki spesifikasi sebagai berikut:
                <table class="table-auto text-gray-600">
                  <tbody>
                    <tr>
                      <td>Energi/Arus</td>
                      <td>:&ensp;350 keV/10 mA</td>
                    </tr>
                    <tr>
                      <td>Tipe</td>
                      <td>:&ensp;Akselator Linier, DC, Energi Rendah</td>
                    </tr>
                    <tr>
                      <td>Shielding</td>
                      <td>:&ensp;Beton Barit (perlu ruangan khusus)</td>
                    </tr>
                    <tr>
                      <td>Partikel</td>
                      <td>:&ensp;Elektron</td>
                    </tr>
                    <tr>
                      <td>Sumber Tegangan Tinggi &ensp;</td>
                      <td>:&ensp;Cockroft-Walton Open Air</td>
                    </tr>
                  </tbody>
                </table>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Arjuna 1.0
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                5/12/2022
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Sejarah Arjuna 1.0
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Pusat Sains dan Teknologi Akselerator BATAN mampu merancangbangun Mesin Berkas Elektron (MBE) yang diberi nama Arjuna 1.0 (Akselerator Jogja untuk Indonesia)....
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Detail
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                5/12/2022
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Komponen Arjuna 1.0
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Mesin Berkas Elektron (MBE) Arjuna 1.0 memiliki beberapa komponen seperti sumber elektron, kendali conveyor, magnet pemfokus, magnet pemayar, generator Cockroft-Walton, ....
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Detail
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                5/12/2022
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Pemanfaatan Arjuna 1.0
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Mesin Berkas Elektron (MBE) Arjuna 1.0 dapat digunakan untuk berbagai keperluan seperti penelitian, pendidikan, dan pengembangan teknologi....
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Detail
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="container mx-auto text-center py-6 mb-12">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Dashboard IAL
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 text-3xl leading-tight">
        Buat Akun Sekarang Untuk Melihat Data Sistem Akuisisi!
      </h3>
      <a href="/register">
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Bergabung!
        </button>
      </a>
    </section>

@endsection