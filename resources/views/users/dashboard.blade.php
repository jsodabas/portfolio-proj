<x-layout>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <section class="main-banner">
            <section class="hero">
                    <div class="text-prg">
                        <h1 class="text-3xl md:text-4xl font-semibold mb-4">BLOG - PORTFOLIO</h1>
                        <p>
                            Welcome to my Website, I am <span class="font-semibold">Shane Jared Sabado</span> and this is my portfolio website where you can write your testimonials and everything.
                            This website is created for those who want to express their feelings about anything.
                        </p>
                        <div class="buttons">
                            <button class="btn">See More</button>
                        </div>
                    </div>
                    <div class="img-hero md:w-1/2 flex justify-center">
                        <img src="{{ URL('images/blog-post.png') }}" alt="mypicture" class="max-w-full h-auto shadow-md rounded-lg">
                    </div>
            </section>

            <section class="primary-content px-4 py-8">
                <div class="title-content text-center mb-8">
                    <h1 class="text-2xl md:text-3xl font-semibold">WHAT'S THIS WEBSITE FOR?</h1>
                    <div class="w-24 h-0.5 bg-black mb-3 mx-auto"></div>
                    <p class="text-sm md:text-base">
                        This website contains my portfolio, is for you to see my data and the story behind my career. <br>
                        You can post your blog, make a testimonial, and connect with other user's posts.
                    </p>
                </div>
                <div class="content">
                    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6">
                        <div class="text-center p-4 bg-white shadow-md rounded-lg">
                            <img src="{{ URL('images/sign_up.png') }}" alt="mypicture" class="mx-auto mb-4">
                            <h1 class="text-lg font-semibold">Create an Account</h1>
                            <div class="w-24 h-0.5 bg-black mb-3 mx-auto"></div>
                            <p class="text-sm text-center">
                                Register new account so you can connect and view other's posts.
                            </p>
                        </div>
                        <div class="text-center p-4 bg-white shadow-md rounded-lg">
                            <img src="{{ URL('images/add_post.png') }}" alt="mypicture" class="mx-auto mb-4">
                            <h1 class="text-lg font-semibold">Post Your Own Content</h1>
                            <div class="w-24 h-0.5 bg-black mb-3 mx-auto"></div>
                            <p class="text-sm text-center">
                                Once registered, post your own blog like others. You can edit your post if you'd like to or decide to delete it.
                            </p>
                        </div>
                        <div class="text-center p-4 bg-white shadow-md rounded-lg">
                            <img src="{{ URL('images/posts.png') }}" alt="mypicture" class="mx-auto mb-4">
                            <h1 class="text-lg font-semibold">View Other's Posts</h1>
                            <div class="w-24 h-0.5 bg-black mb-3 mx-auto"></div>
                            <p class="text-sm text-center">
                                Share your thoughts and feelings about your life.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="secondary-content bg-gradient-to-br from-gray-100 to-gray-300 py-16">
                <div class="container mx-auto px-6 sm:px-12 lg:px-20">
                    <!-- Section Header -->
                    <div class="text-center mb-12">
                        <h2 class="text-4xl font-extrabold text-gray-800 mb-4">
                            What My Website Offers
                        </h2>
                        <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                            Explore my portfolio, read insightful articles, and connect with me. Whether you're here to find inspiration, learn new skills, or collaborate on a project, there's something for everyone!
                        </p>
                    </div>

                    <!-- Features Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="group bg-white shadow-md hover:shadow-lg transition-shadow duration-300 rounded-lg p-8">
                            <div class="flex items-center justify-center h-16 w-16 bg-blue-500 text-white rounded-full mb-4">
                                <i class="fas fa-laptop-code text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                Showcase My Projects
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                View my collection of web development projects that demonstrate technical skills and creativity.
                            </p>
                        </div>
                        <!-- Feature 2 -->
                        <div class="group bg-white shadow-md hover:shadow-lg transition-shadow duration-300 rounded-lg p-8">
                            <div class="flex items-center justify-center h-16 w-16 bg-green-500 text-white rounded-full mb-4">
                                <i class="fas fa-blog text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                Read My Blog
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Explore tutorials, tips, and articles on web development, design, and industry trends.
                            </p>
                        </div>
                        <!-- Feature 3 -->
                        <div class="group bg-white shadow-md hover:shadow-lg transition-shadow duration-300 rounded-lg p-8">
                            <div class="flex items-center justify-center h-16 w-16 bg-purple-500 text-white rounded-full mb-4">
                                <i class="fas fa-envelope text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                                Get in Touch
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Contact me for collaborations, inquiries, or to discuss your project ideas.
                            </p>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center mt-16">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            Ready to Explore More?
                        </h3>
                        <p class="text-gray-600 mb-6">
                            Dive deeper into my <a href="{{ route('portfolio') }}" class="text-blue-500">portfolio</a> or reach out to start a conversation.
                        </p>
                    </div>
                </div>
            </section>

            <section class="promote">
                <div class="sketchup-skill">
                    <div class="overlay">
                        <h1 class="text-4xl">3D Sketchup
                        </h1>
                        <p class="py-5">With more than 7 years of experience, designing interior or exterior SketchUp project.
                        </p>
                        <button>
                            <a href="{{ route('contact3d') }}">Contact</a>
                        </button>
                    </div>
                    <div class="img">
                        <img src="{{ url('images/sketchup.webp') }}" alt="Sketchup 3D">
                    </div>
                </div>
                <div class="title-field">
                    <h1 class="text-4xl">Contact</h1>
                    <p class="text-lg my-2">Message me and let me know how I can improve my website.</p>
                    <button class="button">
                        <a href="{{ route('contact') }}">Contact Me</a>
                    </button>
                </div>
                <div class="webdev-skill px-10">
                    <div class="overlay">
                        <h1 class="text-4xl">Web Developing</h1>
                        <p class="py-5">Do you have a business? You need a website to showcase your project! Let me know.</p>
                        <button>
                            <a href="{{ route('contactwebdev') }}">Contact</a>
                        </button>
                    </div>
                    <div class="img">
                        <img src="{{ url('images/website_horizontal.jpg') }}" alt="Web Development">
                    </div>
                </div>
            </section>
    </section>
</x-layout>
