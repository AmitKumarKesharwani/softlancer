<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Softlancer - Website Development Company | Best Website Development | Company In Noida.</title>
    
        @vite('public/css/app.css')
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    </head>
    <body>
		<div class="grid grid-cols-3 bg-lightgrey text-center py-3 bg-black text-gray-400 text-sm">
			<div>Noida Uttar Pradesh</div>
			<div>Note:- We help you to grow your bussiness</div>
			<div>Contact@softlancer.in</div>
		</div>

		<div class="flex justify-between px-32 py-2.5 bg-[#1842b6] items-center">
			<a href="index.html">
				<h1 class="text-white block font-semibold">
					Soft<span class="text-secondary">lancer</span>
				</h1>
			</a>

			<div class="grid grid-cols-1 text-gray-400">
				Have Any questions?<br>
				<span class=" text-secondary">Call: +91 8957120270</span>
			</div>
		</div>

		<!-- Banner Image -->
		<div class="w-full">
			<img src="{{ asset('images/carousel.jpg') }}" alt="Banner">
		</div>

        <!-- Fact Start -->
		<div class="bg-secondary py-5">
			<div class="container">
				<div class="grid grid-cols-4">
					<div class="flex">
						<h1 class="me-3 text-primary">99</h1>
                  		<h5 class="text-white mt-1">Success in getting happy customer</h5>
					</div>

					<div class="flex">
						<h1 class="me-3 text-primary counter-value">25</h1>
						<h5 class="text-white mt-1">Thousands of successful business</h5>
					</div>

					<div class="flex">
						<h1 class="me-3 text-primary counter-value">120</h1>
                  		<h5 class="text-white mt-1">Total clients who love HighTech</h5>
					</div>

					<div class="flex">
						<h1 class="me-3 text-primary counter-value">5</h1>
						<h5 class="text-white mt-1">
							Stars reviews given by satisfied clients
						</h5>
					</div>
				</div>
			</div>
		</div>    
        <!-- Fact End -->
    
        <!-- About Start -->
		<div class="container py-5 my-5">
			<div class="grid grid-cols-2">
				<div class="relative">
					<img
						src="{{ asset('images/about-1.jpg') }}"
						class="w-96 rounded mb-[25%]"
						alt="Image"
					/>
					<div class="absolute w-96 top-[25%] left-[25%]">
					  <img
						  src="{{ asset('images/about-2.jpg') }}"
						class="w-96 rounded"
						alt=""
					  />
					</div>
				</div>

				<div>
					<h5 class="text-primary">About Us</h5>
					<h1 class="mb-4">
					About HighTech Agency And It's Innovative IT Solutions
					</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
					efficitur quis purus ut interdum. Pellentesque aliquam dolor eget
					urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus,
					ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida
					eros. Proin scelerisque quam nec elementum viverra. Suspendisse
					viverra hendrerit diam in tempus. Etiam gravida justo nec erat
					vestibulum, et malesuada augue laoreet.
					</p>
					<p class="mb-4">
					Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam
					volutpat libero sit amet leo cursus, ac viverra eros tristique.
					Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam
					nec elementum viverra. Suspendisse viverra hendrerit diam in
					tempus.
					</p>
					<a
					href=""
					class="btn btn-secondary rounded-pill px-5 py-3 text-white"
					>More Details</a
					>
				</div>
			</div>
		</div>
        <!-- About End -->
    
        <!-- Services Start -->
		@php
		
			$services = [
				[
					'header' => 'Web Design',
					'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
					'read-more' => 'Read More',
					'icon' => 'icon-mail',
				],[
					'header' => 'Web Design',
					'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
					'read-more' => 'Read More',
					'icon' => 'icon-mail',
				],[
					'header' => 'Web Design',
					'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
					'read-more' => 'Read More',
					'icon' => 'icon-mail',
				],[
					'header' => 'Web Design',
					'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
					'read-more' => 'Read More',
					'icon' => 'icon-mail',
				],[
					'header' => 'Web Design',
					'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
					'read-more' => 'Read More',
					'icon' => 'icon-mail',
				],[
					'header' => 'Web Design',
					'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ',
					'read-more' => 'Read More',
					'icon' => 'icon-mail',
				],
			];
		@endphp
		<div class="container">
			<div class="text-center mx-auto pb-5 max-w-[600px]">
				<h5 class="text-primary">Our Services</h5>
              	<h1>Services Built Specifically For Your Business</h1>
			</div>

			<div class="grid grid-cols-3 gap-5">
				@foreach ($services as $item)
					<div class="bg-white shadow-2xl p-5 text-center justify-center">
						<h2>{{ $item['header'] }}</h2>

						<p>{{ $item['description'] }}</p>

						<div class="bg-secondary px-5 py-3 rounded-full text-white w-fit mx-auto">{{ $item['read-more'] }}</div>
					</div>
				@endforeach
			</div>
		</div>
        <!-- Services End -->
    
        <!-- Project Start -->
        <div class="container-fluid project py-5 mb-5">
          <div class="container">
            <div
              class="text-center mx-auto pb-5 wow fadeIn"
              data-wow-delay=".3s"
              style="max-width: 600px"
            >
              <h5 class="text-primary">Our Project</h5>
              <h1>Our Recently Completed Projects</h1>
            </div>
            <div class="row g-5">
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                  <div class="project-img">
                    <img
                      src="{{ asset('images/project-1.jpg')}}"
                      class="w-full rounded"
                      alt=""
                    />
                    <div class="project-content">
                      <a href="#" class="text-center">
                        <h4 class="text-secondary">Web design</h4>
                        <p class="m-0 text-white">Web Analysis</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                  <div class="project-img">
                    <img
                      src="{{ asset('images/project-2.jpg')}}"
                      class="w-full rounded"
                      alt=""
                    />
                    <div class="project-content">
                      <a href="#" class="text-center">
                        <h4 class="text-secondary">Cyber Security</h4>
                        <p class="m-0 text-white">Cyber Security Core</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                  <div class="project-img">
                    <img
                      src="{{ asset('images/project-3.jpg')}}"
                      class="w-full rounded"
                      alt=""
                    />
                    <div class="project-content">
                      <a href="#" class="text-center">
                        <h4 class="text-secondary">Mobile Info</h4>
                        <p class="m-0 text-white">Upcomming Phone</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                  <div class="project-img">
                    <img
                      src="{{ asset('images/project-4.jpg')}}"
                      class="w-full rounded"
                      alt=""
                    />
                    <div class="project-content">
                      <a href="#" class="text-center">
                        <h4 class="text-secondary">Web Development</h4>
                        <p class="m-0 text-white">Web Analysis</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                  <div class="project-img">
                    <img
                      src="{{ asset('images/project-5.jpg')}}"
                      class="w-full rounded"
                      alt=""
                    />
                    <div class="project-content">
                      <a href="#" class="text-center">
                        <h4 class="text-secondary">Digital Marketing</h4>
                        <p class="m-0 text-white">Marketing Analysis</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                  <div class="project-img">
                    <img
                      src="{{ asset('images/project-6.jpg')}}"
                      class="w-full rounded"
                      alt=""
                    />
                    <div class="project-content">
                      <a href="#" class="text-center">
                        <h4 class="text-secondary">keyword Research</h4>
                        <p class="m-0 text-white">keyword Analysis</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Project End -->

        <i class="fas fa-user"></i>

    
        <!-- Blog Start -->
        <div class="container-fluid blog py-5 mb-5">
          <div class="container">
            <div
              class="text-center mx-auto pb-5 wow fadeIn"
              data-wow-delay=".3s"
              style="max-width: 600px"
            >
              <h5 class="text-primary">Our Blog</h5>
              <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
              <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                  <img
                    src="{{ asset('images/blog-1.jpg')}}"
                    class="w-100 rounded-top"
                    alt=""
                  />
                  <span
                    class="position-absolute px-4 py-3 bg-primary text-white rounded"
                    style="top: -28px; right: 20px"
                    >Web Design</span
                  >
                  <div
                    class="blog-btn d-flex justify-content-between position-relative px-3"
                    style="margin-top: -75px"
                  >
                    <div
                      class="blog-icon btn btn-secondary px-3 rounded-pill my-auto"
                    >
                      <a href="" class="btn text-white">Read More</a>
                    </div>
                    <div
                      class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill"
                    >
                      <div class="blog-icon-1">
                        <p class="text-white px-2">
                          Share<i class="fa fa-arrow-right ms-3"></i>
                        </p>
                      </div>
                      <div class="blog-icon-2">
                        <a href="" class="btn me-1"
                          ><i class="fab fa-facebook-f text-white"></i
                        ></a>
                        <a href="" class="btn me-1"
                          ><i class="fab fa-twitter text-white"></i
                        ></a>
                        <a href="" class="btn me-1"
                          ><i class="fab fa-instagram text-white"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="blog-content text-center position-relative px-3"
                    style="margin-top: -25px"
                  >
                    <img
                      src="{{ asset('images/admin.jpg')}}"
                      class="rounded-circle border-4 border-white mb-3"
                      alt=""
                    />
                    <h5 class="">By Daniel Martin</h5>
                    <span class="text-secondary">24 March 2023</span>
                    <p class="py-2">
                      Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                      interdum. Aliquam dolor eget urna ultricies tincidunt libero
                      sit amet
                    </p>
                  </div>
                  <div
                    class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom"
                  >
                    <a href="" class="text-white"
                      ><small
                        ><i class="fas fa-share me-2 text-secondary"></i>5324
                        Share</small
                      ></a
                    >
                    <a href="" class="text-white"
                      ><small
                        ><i class="fa fa-comments me-2 text-secondary"></i>5
                        Comments</small
                      ></a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                <div class="blog-item position-relative bg-light rounded">
                  <img
                    src="{{ asset('images/blog-2.jpg')}}"
                    class="w-100 rounded-top"
                    alt=""
                  />
                  <span
                    class="position-absolute px-4 py-3 bg-primary text-white rounded"
                    style="top: -28px; right: 20px"
                    >Development</span
                  >
                  <div
                    class="blog-btn d-flex justify-content-between position-relative px-3"
                    style="margin-top: -75px"
                  >
                    <div
                      class="blog-icon btn btn-secondary px-3 rounded-pill my-auto"
                    >
                      <a href="" class="btn text-white">Read More</a>
                    </div>
                    <div
                      class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill"
                    >
                      <div class="blog-icon-1">
                        <p class="text-white px-2">
                          Share<i class="fa fa-arrow-right ms-3"></i>
                        </p>
                      </div>
                      <div class="blog-icon-2">
                        <a href="" class="btn me-1"
                          ><i class="fab fa-facebook-f text-white"></i
                        ></a>
                        <a href="" class="btn me-1"
                          ><i class="fab fa-twitter text-white"></i
                        ></a>
                        <a href="" class="btn me-1"
                          ><i class="fab fa-instagram text-white"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="blog-content text-center relative px-3"
                    style="margin-top: -25px"
                  >
                    <img
                      src="{{ asset('images/admin.jpg')}}"
                      class="rounded-circle border-4 border-white mb-3"
                      alt=""
                    />
                    <h5 class="">By Daniel Martin</h5>
                    <span class="text-secondary">23 April 2023</span>
                    <p class="py-2">
                      Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                      interdum. Aliquam dolor eget urna ultricies tincidunt libero
                      sit amet
                    </p>
                  </div>
                  <div
                    class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom"
                  >
                    <a href="" class="text-white"
                      ><small
                        ><i class="fas fa-share me-2 text-secondary"></i>5324
                        Share</small
                      ></a
                    >
                    <a href="" class="text-white"
                      ><small
                        ><i class="fa fa-comments me-2 text-secondary"></i>5
                        Comments</small
                      ></a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                <div class="blog-item position-relative bg-light rounded">
                  <img
                    src="{{ asset('images/blog-3.jpg')}}"
                    class="img-fluid w-100 rounded-top"
                    alt=""
                  />
                  <span
                    class="position-absolute px-4 py-3 bg-primary text-white rounded"
                    style="top: -28px; right: 20px"
                    >Mobile App</span
                  >
                  <div
                    class="blog-btn d-flex justify-content-between position-relative px-3"
                    style="margin-top: -75px"
                  >
                    <div
                      class="blog-icon btn btn-secondary px-3 rounded-pill my-auto"
                    >
                      <a href="" class="btn text-white">Read More</a>
                    </div>
                    <div
                      class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill"
                    >
                      <div class="blog-icon-1">
                        <p class="text-white px-2">
                          Share<i class="fa fa-arrow-right ms-3"></i>
                        </p>
                      </div>
                      <div class="blog-icon-2">
                        <a href="" class="btn me-1"
                          ><i class="fab fa-facebook-f text-white"></i
                        ></a>
                        <a href="" class="btn me-1"
                          ><i class="fab fa-twitter text-white"></i
                        ></a>
                        <a href="" class="btn me-1"
                          ><i class="fab fa-instagram text-white"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="blog-content text-center position-relative px-3"
                    style="margin-top: -25px"
                  >
                    <img
                      src="{{ asset('images/admin.jpg')}}"
                      class="img-fluid rounded-circle border-4 border-white mb-3"
                      alt=""
                    />
                    <h5 class="">By Daniel Martin</h5>
                    <span class="text-secondary">30 jan 2023</span>
                    <p class="py-2">
                      Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                      interdum. Aliquam dolor eget urna ultricies tincidunt libero
                      sit amet
                    </p>
                  </div>
                  <div
                    class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom"
                  >
                    <a href="" class="text-white"
                      ><small
                        ><i class="fas fa-share me-2 text-secondary"></i>5324
                        Share</small
                      ></a
                    >
                    <a href="" class="text-white"
                      ><small
                        ><i class="fa fa-comments me-2 text-secondary"></i>5
                        Comments</small
                      ></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog End -->
    
        <!-- Team Start -->
		<div class="container py-5 mb-5">
		<div
			class="text-center mx-auto pb-5 wow fadeIn"
			data-wow-delay=".3s"
			style="max-width: 600px"
		>
			<h5 class="text-primary">Our Team</h5>
			<h1>Meet our expert Team</h1>
		</div>

		<div class="grid grid-cols-3 gap-5">
			<div class="rounded bg-gray-100">
			<div class="team-content">
				<div class="team-img-icon">
				<div class="grid justify-center rounded-circle">
					<img
					src="{{ asset('images/team-1.jpg')}}"
					class="img-fluid w-32 rounded-circle"
					alt=""
					/>
				</div>
				<div class="team-name text-center py-3">
					<h4 class="">Full Name</h4>
					<p class="m-0">Designation</p>
				</div>
				<div class="team-icon d-flex justify-content-center pb-4">
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-facebook-f"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-twitter"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-instagram"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-linkedin-in"></i
					></a>
				</div>
				</div>
			</div>
			</div>

			<div class="rounded bg-gray-100">
			<div class="team-content">
				<div class="team-img-icon">
				<div class="grid justify-center rounded-circle">
					<img
					src="{{ asset('images/team-2.jpg')}}"
					class="img-fluid w-32 rounded-circle"
					alt=""
					/>
				</div>
				<div class="team-name text-center py-3">
					<h4 class="">Full Name</h4>
					<p class="m-0">Designation</p>
				</div>
				<div class="team-icon d-flex justify-content-center pb-4">
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-facebook-f"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-twitter"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-instagram"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-linkedin-in"></i
					></a>
				</div>
				</div>
			</div>
			</div>

			<div class="rounded bg-gray-100">
			<div class="team-content">
				<div class="team-img-icon">
				<div class="grid justify-center rounded-circle">
					<img
					src="{{ asset('images/team-3.jpg')}}"
					class="img-fluid w-32 rounded-full"
					alt=""
					/>
				</div>
				<div class="team-name text-center py-3">
					<h4 class="">Full Name</h4>
					<p class="m-0">Designation</p>
				</div>
				<div class="team-icon flex justify-center pb-4">
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-facebook-f"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-twitter"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-instagram"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-linkedin-in"></i
					></a>
				</div>
				</div>
			</div>
			</div>

			<div class="rounded bg-gray-100">
			<div class="team-content">
				<div class="team-img-icon">
				<div class="grid justify-center rounded-circle">
					<img
					src="{{ asset('images/team-4.jpg')}}"
					class="img-fluid w-32 rounded-circle"
					alt=""
					/>
				</div>
				<div class="team-name text-center py-3">
					<h4 class="">Full Name</h4>
					<p class="m-0">Designation</p>
				</div>
				<div class="team-icon flex justify-center pb-4">
					<a
					class="btn btn-square btn-secondary text-white rounded-full	 m-1"
					href=""
					><i class="fab fa-facebook-f"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-twitter"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-instagram"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-linkedin-in"></i
					></a>
				</div>
				</div>
			</div>
			</div>

			<div class="rounded bg-gray-100">
			<div class="team-content">
				<div class="team-img-icon">
				<div class="grid justify-center rounded-circle">
					<img
					src="{{ asset('images/team-3.jpg')}}"
					class="img-fluid w-32 rounded-full"
					alt=""
					/>
				</div>
				<div class="team-name text-center py-3">
					<h4 class="">Full Name</h4>
					<p class="m-0">Designation</p>
				</div>
				<div class="team-icon flex justify-center pb-4">
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-facebook-f"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-twitter"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-instagram"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-linkedin-in"></i
					></a>
				</div>
				</div>
			</div>
			</div>

			<div class="rounded bg-gray-100">
			<div class="team-content">
				<div class="team-img-icon">
				<div class="grid justify-center rounded-circle">
					<img
					src="{{ asset('images/team-4.jpg')}}"
					class="img-fluid w-32 rounded-circle"
					alt=""
					/>
				</div>
				<div class="team-name text-center py-3">
					<h4 class="">Full Name</h4>
					<p class="m-0">Designation</p>
				</div>
				<div class="team-icon flex justify-center pb-4">
					<a
					class="btn btn-square btn-secondary text-white rounded-full	 m-1"
					href=""
					><i class="fab fa-facebook-f"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-twitter"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-instagram"></i
					></a>
					<a
					class="btn btn-square btn-secondary text-white rounded-full m-1"
					href=""
					><i class="fab fa-linkedin-in"></i
					></a>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>
        <!-- Team End -->
    
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 mb-5">
          <div class="container">
            <div
              class="text-center mx-auto pb-5 wow fadeIn"
              data-wow-delay=".3s"
              style="max-width: 600px"
            >
              <h5 class="text-primary">Our Testimonial</h5>
              <h1>Our Client Saying!</h1>
            </div>

            <div
              class=" grid grid-cols-3 gap-5 owl-carousel testimonial-carousel wow fadeIn"
              data-wow-delay=".5s"
            >
              <div class="testimonial-item border p-4">
                <div class="d-flex align-items-center">
                  <div class="">
                    <img src="{{ asset('images/testimonial-1.jpg') }}" alt="" />
                  </div>
                  <div class="ms-4">
                    <h4 class="text-secondary">Client Name</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex pe-5">
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                    </div>
                  </div>
                </div>
                <div class="border-top mt-4 pt-3">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                    interdum aliquam dolor eget urna. Nam volutpat libero sit amet
                    leo cursus, ac viverra eros morbi quis quam mi.
                  </p>
                </div>
              </div>

              <div class="testimonial-item border p-4">
                <div class="d-flex align-items-center">
                  <div class="">
                    <img src="{{ asset('images/testimonial-2.jpg') }}" alt="" />
                  </div>
                  <div class="ms-4">
                    <h4 class="text-secondary">Client Name</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex pe-5">
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                    </div>
                  </div>
                </div>
                <div class="border-top mt-4 pt-3">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                    interdum aliquam dolor eget urna. Nam volutpat libero sit amet
                    leo cursus, ac viverra eros morbi quis quam mi.
                  </p>
                </div>
              </div>

              <div class="testimonial-item border p-4">
                <div class="flex items-center">
                  <div class="">
                    <img src="{{ asset('images/testimonial-3.jpg') }}" alt="" />
                  </div>
                  <div class="ms-4">
                    <h4 class="text-secondary">Client Name</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex pe-5">
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                    </div>
                  </div>
                </div>
                <div class="border-t mt-4 pt-3">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                    interdum aliquam dolor eget urna. Nam volutpat libero sit amet
                    leo cursus, ac viverra eros morbi quis quam mi.
                  </p>
                </div>
              </div>

              <div class="testimonial-item border p-4">
                <div class="flex items-center">
                  <div class="">
                    <img src="{{ asset('images/testimonial-4.jpg') }}" alt="" />
                  </div>
                  <div class="ms-4">
                    <h4 class="text-secondary">Client Name</h4>
                    <p class="m-0 pb-3">Profession</p>
                    <div class="d-flex pe-5">
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                      <i class="fas fa-star me-1 text-primary"></i>
                    </div>
                  </div>
                </div>
                <div class="border-t mt-4 pt-3">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                    interdum aliquam dolor eget urna. Nam volutpat libero sit amet
                    leo cursus, ac viverra eros morbi quis quam mi.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Testimonial End -->
    
        <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
          <div class="container">
            <div
              class="text-center mx-auto pb-5 wow fadeIn"
              data-wow-delay=".3s"
              style="max-width: 600px"
            >
              <h5 class="text-primary">Get In Touch</h5>
              <h1 class="mb-3">Contact for any query</h1>
              <p class="mb-2">
                The contact form is currently inactive. Get a functional and working
                contact form with Ajax & PHP in a few minutes. Just copy and paste
                the files, add a little code and you're done.
                <a href="https://htmlcodex.com/contact-form">Download Now</a>.
              </p>
            </div>
            <div class="contact-detail position-relative p-5">
              <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                  <div class="d-flex bg-light p-3 rounded">
                    <div
                      class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                      style="width: 64px; height: 64px"
                    >
                      <i class="fas fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                      <h4 class="text-primary">Address</h4>
                      <a
                        href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6"
                        target="_blank"
                        class="h5"
                        >23 rank Str, NY</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                  <div class="d-flex bg-light p-3 rounded">
                    <div
                      class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                      style="width: 64px; height: 64px"
                    >
                      <i class="fa fa-phone text-white"></i>
                    </div>
                    <div class="ms-3">
                      <h4 class="text-primary">Call Us</h4>
                      <a class="h5" href="tel:+0123456789" target="_blank"
                        >+012 3456 7890</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                  <div class="d-flex bg-light p-3 rounded">
                    <div
                      class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                      style="width: 64px; height: 64px"
                    >
                      <i class="fa fa-envelope text-white"></i>
                    </div>
                    <div class="ms-3">
                      <h4 class="text-primary">Email Us</h4>
                      <a class="h5" href="mailto:info@example.com" target="_blank"
                        >info@example.com</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                  <div class="p-5 h-100 rounded contact-map">
                    <iframe
                      class="rounded w-100 h-100"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                  <div class="p-5 rounded contact-form">
                    <div class="mb-4">
                      <input
                        type="text"
                        class="form-control border-0 py-3"
                        placeholder="Your Name"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="email"
                        class="form-control border-0 py-3"
                        placeholder="Your Email"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="text"
                        class="form-control border-0 py-3"
                        placeholder="Project"
                      />
                    </div>
                    <div class="mb-4">
                      <textarea
                        class="w-100 form-control border-0 py-3"
                        rows="6"
                        cols="10"
                        placeholder="Message"
                      ></textarea>
                    </div>
                    <div class="text-start">
                      <button
                        class="btn bg-primary text-white py-3 px-5"
                        type="button"
                      >
                        Send Message
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Contact End -->
    
        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
          <div class="container pt-5 pb-4">
            <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                <a href="index.html">
                  <h1 class="text-white fw-bold d-block">
                    High<span class="text-secondary">Tech</span>
                  </h1>
                </a>
                <p class="mt-4 text-light">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                  facere delectus qui placeat inventore consectetur repellendus
                  optio debitis.
                </p>
                <div class="d-flex hightech-link">
                  <a
                    href=""
                    class="btn-light nav-fill btn btn-square rounded-circle me-2"
                    ><i class="fab fa-facebook-f text-primary"></i
                  ></a>
                  <a
                    href=""
                    class="btn-light nav-fill btn btn-square rounded-circle me-2"
                    ><i class="fab fa-twitter text-primary"></i
                  ></a>
                  <a
                    href=""
                    class="btn-light nav-fill btn btn-square rounded-circle me-2"
                    ><i class="fab fa-instagram text-primary"></i
                  ></a>
                  <a
                    href=""
                    class="btn-light nav-fill btn btn-square rounded-circle me-0"
                    ><i class="fab fa-linkedin-in text-primary"></i
                  ></a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Short Link</a>
                <div class="mt-4 d-flex flex-column short-link">
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>About
                    us</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Contact
                    us</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Our
                    Services</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Our
                    Projects</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Latest
                    Blog</a
                  >
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Help Link</a>
                <div class="mt-4 d-flex flex-column help-link">
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of
                    use</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Privacy
                    Policy</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a
                  >
                  <a href="" class="mb-2 text-white"
                    ><i class="fas fa-angle-right text-secondary me-2"></i
                    >Contact</a
                  >
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <a href="contact.html" class="h3 text-secondary">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                  <a href="#" class="pb-3 text-light border-bottom border-primary"
                    ><i class="fas fa-map-marker-alt text-secondary me-2"></i> Noida
                    Uttar Pradesh</a
                  >
                  <a
                    href="tel:+918957120270"
                    class="py-3 text-light border-bottom border-primary"
                    ><i class="fas fa-phone-alt text-secondary me-2"></i>+91
                    8957120270</a
                  >
                  <a
                    href="mail:contact@softlancer.in"
                    class="py-3 text-light border-b border-primary"
                    ><i class="fas fa-envelope text-secondary me-2"></i>
                    contact@softlancer.in</a
                  >
                </div>
              </div>
            </div>

	            <hr class="text-light mt-5 mb-4" />

				<div class="flex justify-between">
					<div class="text-center text-md-start">
						<span class="text-light"
						><a href="#" class="text-secondary"
							><i class="fas fa-copyright text-secondary me-2"></i>Your Site
							Name</a
						>, All right reserved.</span
						>
					</div>

					<div class="text-center text-md-end">
						<span class="text-light"
						>Designed By<a href="https://softlancer.in" class="text-secondary"
							> Amit Kumar</a
						>
						Distributed By
						<a href="https://softlancer.in"> Softlancer</a></span
						>
					</div>
				</div>
          </div>
        </div>
        <!-- Footer End -->
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"
          ><i class="fa fa-arrow-up text-white"></i
        ></a>
    
        <!-- Template Javascript -->
        <script src="{{ asset('js/app.js')}}"></script>

        <script src="{{ asset('js/bootstrap.js')}}"></script>
      </body>
</html>
