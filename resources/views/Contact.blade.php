<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>MrBeans CoffeeBeans Shop</title>
</head>

<body>
    @include('header')

    <!-- Isi -->
    <div class="container mx-auto mt-10">
        <div class="row m-5">
            <div class="col-md-12 mt-5 mb-5">
                <h1 class="mb-4 text-3xl">Contact Us</h1>

                <!-- Biodata Tim Section -->
                <section>
                    <div class="container">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                            <!-- Bagus -->
                            <div class="p-5 border rounded-lg  shadow-lg">
                                <img src="{{ asset('assets/org/BDP-removebg.png') }}" alt="BagusDP" class="mx-auto"
                                    width="200px" height="300px">
                                <h2 class="text-xl font-semibold text-center mt-2">Biodata Tim</h2>
                                <p class="text-center">
                                    <strong>NIM:</strong> 3312311132 <br />
                                    <strong>Nama:</strong> Bagus Dwi Putra<br />
                                    <strong>Alamat:</strong> Batu Aji<br />
                                    <strong>Jenis Kelamin:</strong> Pria<br />
                                    <strong>Agama:</strong> Islam<br />
                                    <strong>No. HP:</strong> 081278732817<br />
                                    <strong>Email:</strong> bagusdp2011@gmail.com<br />
                                </p>
                            </div>
                            <!-- Ayubi -->
                            <div class="p-5 border rounded-lg  shadow-lg">
                                <img src="{{ asset('assets/org/2ayub-ok.png') }}" alt="Ayubi" class="mx-auto"
                                    width="200px" height="300px">
                                <h2 class="text-xl font-semibold text-center mt-2">Biodata Tim</h2>
                                <p class="text-center">
                                    <strong>NIM:</strong> 3312311068 <br />
                                    <strong>Nama:</strong> Muhammad Al Ayubi<br />
                                    <strong>Alamat:</strong> Legenda<br />
                                    <strong>Jenis Kelamin:</strong> Pria<br />
                                    <strong>Agama:</strong> Islam<br />
                                    <strong>No. HP:</strong> 087827830287<br />
                                    <strong>Email:</strong> yubialmei14@gmail.com<br />
                                </p>
                            </div>
                            <!-- Netty -->
                            <div class="p-5 border rounded-lg  shadow-lg">
                                <img src="{{ asset('assets/org/neti2.png') }}" alt="Netty" class="mx-auto"
                                    width="250px" height="300px">
                                <h2 class="text-xl font-semibold text-center mt-2">Biodata Tim</h2>
                                <p class="text-center">
                                    <strong>NIM:</strong> 3312311079 <br />
                                    <strong>Nama:</strong> Netty Lorenza Tarigan<br />
                                    <strong>Alamat:</strong> Piayu<br />
                                    <strong>Jenis Kelamin:</strong> Wanita<br />
                                    <strong>Agama:</strong> Kristen<br />
                                    <strong>No. HP:</strong> -<br />
                                    <strong>Email:</strong> nettylorenzatarigan3187 <br>@gmail.com<br />
                                </p>
                            </div>
                            <!-- Raja Ulka -->
                            <div class="p-5 border rounded-lg  shadow-lg">
                                <img src="{{ asset('assets/org/1ulka-ok.png') }}" alt="Ulka" class="mx-auto"
                                    width="100px" height="150px">
                                <h2 class="text-xl font-semibold text-center mt-2">Biodata Tim</h2>
                                <p class="text-center">
                                    <strong>NIM:</strong> 3312311128 <br />
                                    <strong>Nama:</strong> Raja Ulka R.<br />
                                    <strong>Alamat:</strong> Bengkong<br />
                                    <strong>Jenis Kelamin:</strong> Pria<br />
                                    <strong>Agama:</strong> Islam<br />
                                    <strong>No. HP:</strong> 0895705178024<br />
                                    <strong>Email:</strong> ulkateta17@gmail.com<br />
                                </p>
                            </div>
                            <!-- Sheeryl -->
                            <div class="p-5 border rounded-lg  shadow-lg">
                                <img src="{{ asset('assets/org/1sheeyl-ok.png') }}" alt="Sheeryl" class="mx-auto"
                                    width="150px" height="150px">
                                <h2 class="text-xl font-semibold text-center mt-2">Biodata Tim</h2>
                                <p class="text-center">
                                    <strong>NIM:</strong> 3312311086 <br />
                                    <strong>Nama:</strong> Sheeryl Violetta<br />
                                    <strong>Alamat:</strong> Piayu<br />
                                    <strong>Jenis Kelamin:</strong> Wanita<br />
                                    <strong>Agama:</strong> Kristen<br />
                                    <strong>No. HP:</strong> 082284350708<br />
                                    <strong>Email:</strong> serilvioleta@gmail.com<br />
                                </p>
                            </div>
                            <!-- Leornad -->
                            <div class="p-5 border rounded-lg  shadow-lg">
                                <img src="{{ asset('assets/org/1leor-ok.png') }}" alt="Leornad" class="mx-auto" 
                                width="125px" height="225px">
                                <h2 class="text-xl font-semibold text-center mt-2">Biodata Tim</h2>
                                <p class="text-center">
                                    <strong>NIM:</strong> 33123332002 <br />
                                    <strong>Nama:</strong> Leornad Aldo M Purba<br />
                                    <strong>Alamat:</strong> Piayu<br />
                                    <strong>Jenis Kelamin:</strong> Pria<br />
                                    <strong>Agama:</strong> Kristen<br />
                                    <strong>No. HP:</strong> 0895385158042<br />
                                    <strong>Email:</strong> aldoea120911@gmail.com<br />
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Information Section -->
                <section class="mt-5">
                    <h2><b>Contact Information!</b></h2>
                    <p>If you have any questions, inquiries, or feedback, please feel free to reach out to me using the
                        contact
                        information below:</p>

                    <p>
                        <strong>Email:</strong> <a href="mailto:bagusdp2011@gmail.com">bagusdp2011@gmail.com</a> <br>
                        <strong>Phone:</strong> <a
                            href="https://api.whatsapp.com/send?phone=6281278732817&text=Saya%20tertarik%20dan%20ingin%20bertanya">+62-812
                            7873 2817</a> <br>
                        <strong>Address:</strong> Batu Aji, Batam, Kepulauan Riau
                    </p>
                    <br>
                    <p>Alternatively, you can use the contact form below to send me a message:</p>

                    <!-- Contact Form (You can use a third-party form service or create your own) -->
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-auto">Send Message</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
