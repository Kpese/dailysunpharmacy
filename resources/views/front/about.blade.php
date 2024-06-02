@extends('front.layout.app')

@section('content')

    <div  data-aos="fade-left" class="site-blocks-cover inner-page" style="background-image: url('front/images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>About Us</h1>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati natus iure voluptatum eveniet harum recusandae ducimus saepe.</p>ˀ -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5">
      <div class="history-section">
        <h2 class="history-title mt-5 text-dark">Our History</h2>
        <p class="history-description text-dark" style="font-weight: 400">
            Daily Sun Pharmaceutical Company limited formally known as Leady Pharma Industries Limited Company which started operations in the early 80s. It started it operation at No. 94, Ladip Street, Matori area Mushin Oshodi Lagos and was later moved to plot 3 & 4 Tomori industrial estate off Idiroko road Ota Ogun state due to space constraint. It was bought over by new investors Jessy pharmaceutical company limited; a subsidiary of Daily sun pharmaceutical company limited in August 2019 and commenced operation in 2021 after approval and due recognition by relevant agencies and bodies including the National Agency for Food and Drug Administration and Control (NAFDAC) and the Pharmacist Council of Nigeria (PCN).
            <br>
            <br>
            The company is engaging in the business of manufacturing and distribution of pharmaceutical products with the aim of becoming one of the leading players in the pharmaceutical landscape in Nigeria. We currently run a cGMP compliant manufacturing facility and certified by regulatory bodies in Nigeria (NAFDAC & PCN). The company has different dosage form manufacturing lines ranging from dry powders, capsules, tablets, creams and ointments. The company is headed by the Chairman who is acting on behalf of the Board of Trustees and being assisted by the Managing Director.
            <br>
            <br>
            Daily Sun Pharmaceuticals Company Limited’s customer base is fast growing and our network is nationwide with distribution centers in Lagos, Kano, Onitsha, Aba, Imo & Ogun Sate Nigeria.

          </p>
      </div>

      <div class="row">
        <div class="col-12"  data-aos="fade-left">
          <img src="{{ asset('front/images/male-researcher-biotechnology-laboratory-with-petri-dish.jpg')}}" class="rounded mb-4" alt="" width="100%" />
        </div>
      </div>

      <div>
      <p style="color: #fb923c; font-weight: 400" class="section-subtitle mt-5"> Daily Sun Pharmaceutical  </p>

      <h2 style="color: rgb(48, 48, 48);" class="h2 section-title">
    Vision Statement
      </h2>

      <p  style="font-weight: 400" font-size: 16px;" class="section-text text-dark">
          Our vision is to meet the existing and future needs of the healthcare industry in Nigeria by partnering with other stakeholders; and also, be among the first (10) in the pharmaceutical/ healthcare industry; thereafter, through innovation and research, aspiring to become a global enterprise.
      </p>
<br>

      <h2 style="color: rgb(48, 48, 48);" class="h2 section-title">
          Mission Statement
      </h2>
      <p  style="font-weight: 400" font-size: 16px;" class="section-text text-dark">
          We aim to deliver unique & qualitative healthcare products and services that will increase the life expectancy of Nigerians and bring good health to humanity in accordance with the ethics of professional care.
      </p>
   </div>

   <h4 class="text-center mt-5 text-dark">Board of Directors</h4>
   <table class="table table-bordered">
      <thead>
        <tr>
          <th class="bg-warning text-light" scope="col">Name</th>
          <th class="bg-warning text-light" scope="col">Position</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-dark" style="font-weight: 400">Mr. John Chiadizue Chukwuemeka</td>
          <td class="text-dark" style="font-weight: 400">Chairman</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">Mr. Kingsley Uche Chukwuemeka</td>
          <td class="text-dark" style="font-weight: 400">Managing Director</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">  Mr. Kennedy Aniebonam  </td>
          <td class="text-dark" style="font-weight: 400">Operation Manager </td>
        </tr>
      </tbody>
  </table>

   <h4 class="text-center mt-5 text-dark" style="font-weight: 400">Management Team</h4>
   <table class="table table-bordered">
      <thead>
        <tr>
          <th class="bg-warning text-light" scope="col">Name</th>
          <th class="bg-warning text-light" scope="col">Position</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-dark" style="font-weight: 400">Pharm Emeka Ani</td>
          <td class="text-dark" style="font-weight: 400">Superintendent Pharmacist</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">Pharm Onyeka Okenu</td>
        <td class="text-dark" style="font-weight: 400">Production Manager</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">Mr Lawson Ozebu</td>
          <td class="text-dark" style="font-weight: 400">Human REsourse Manager</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">Mr Anele Samuel</td>
          <td class="text-dark" style="font-weight: 400">Chief Accountant</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">Mrs Keleko Adefoyeke Adetutu</td>
          <td class="text-dark" style="font-weight: 400">Quality Manager</td>
        </tr>
        <tr>
          <td class="text-dark" style="font-weight: 400">Engr: Mathew</td>
          <td class="text-dark" style="font-weight: 400">Acting Engineering Manager</td>
        </tr>
      </tbody>
  </table>

</div>


@endsection
