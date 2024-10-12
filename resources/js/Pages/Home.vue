<script setup>

</script>

<template>
    <div class="min-h-screen flex flex-col" aria-label="Content" style="font-family: 'Cardo', sans-serif"><header class="text-white bg-gray-300">
        <div class="container mx-auto px-2 py-4 flex justify-between items-center relative">
            <div class="flex justify-start items-center">
                <span class="mr-3 h-4 w-4 bg-pink-700 rounded-tr rounded-bl"></span>
                <a href="/" class="py-2 text-gray-700 hover:text-gray-800">MÁRIA ŽUFFOVÁ</a>
            </div>

            <div>
                <nav :class="{ 'w-full fixed inset-y-0 inset-x-0 flex justify-end': false }">
                    <ul class="list-none my-0 pl-0 flex items-center" :class="{ 'bg-gray-800 opacity-90 h-full w-full flex-col justify-start':false }">
                        <div class="block lg:hidden w-full text-right p-4 mb-8">
                            <i class="fa fa-2x cursor-pointer fa-times"></i>
                        </div><li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                        <a href="/about" class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" title="More about us" >About</a>
                    </li><li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                        <a href="/research" class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" title="Research" >Research</a>
                    </li><li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                        <a href="/engagement" class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" title="Public engagement" >Public engagement</a>
                    </li><li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                        <a href="/teaching" class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" title="Teaching" >Teaching</a>
                    </li><li class="px-4 py-2 m-0 mb-2 lg:m-0 rounded hover:bg-gray-400">
                        <a href="/contact" class="text-white hover:text-white lg:text-gray-700 lg:hover:text-gray-800" title="Contact us" >Contact</a>
                    </li></ul>
                </nav>
            </div>

            <i class="block text-gray-700 lg:hidden cursor-pointer fa fa-lg fa-bars"></i>
        </div>
    </header><main class="flex-grow flex flex-col">
        <div class="container mx-auto px-2 py-4 flex-grow flex items-center justify-center">

            <div class="flex justify-center items-center flex-col md:flex-row md:mb-0 lg:justify-center">
                <section class="p-4 pb-0 border border-gray-200 shadow-lg w-full sm:w-3/5 md:w-1/2 lg:w-auto mb-8 md:mb-0">
                    <main class="flex justify-center items-center flex-col px-4 sm:px-16 py-10 bg-gray-200">
                        <img class="w-48 h-48 rounded-full mb-6" src=/img/09_maria_zuffova.jpg alt="Profile image">
                        <h2 class="uppercase font-thin mb-0">Mária</h2>
                        <h2 class="uppercase font-thin mb-0">Žuffová</h2>
                        <div class="h-0.5 w-1/5 mx-auto bg-pink-700 my-6"></div>
                        <h4 class="uppercase font-thin mb-0 text-center">Researcher</h4>
                        <p class="pb-0 text-xs text-gray-600"><i class="fa fa-map-marker-alt mr-1"></i>European University Institute</p>
                    </main>

                    <footer class="flex justify-center items-center py-5">

                        <a href="https://scholar.google.com/citations?user=V7aVzF0AAAAJ&hl=sk&oi=ao" class="mx-3 text-gray-700 hover:text-gray-800"><i class="flex-grow fab fa-lg fa-fw fa-google"></i></a>


                        <a href="https://www.researchgate.net/profile/Maria_Zuffova2" class="mx-3 text-gray-700 hover:text-gray-800"><i class="flex-grow fab fa-lg fa-fw fa-researchgate"></i></a>



                        <a href="https://twitter.com/mariazuffova" class="mx-3 text-gray-700 hover:text-gray-800"><i class="flex-grow fab fa-lg fa-fw fa-twitter"></i></a>


                        <a href="mailto:maria.zuffova@eui.eu" class="mx-3 text-gray-700 hover:text-gray-800"><i class="flex-grow fa fa-lg fa-fw fa-envelope"></i></a>

                    </footer>

                </section>

                <section class="p-4 w-full md:w-1/2 lg:w-5/12 ml-4">
                    <h1 class="uppercase text-4xl text-center md:text-left">Welcome!</h1>
                    <div class="my-6 md:my-10 flex justify-center items-center flex-col md:flex-row md:justify-start">
                        <a href="/research" class="px-6 py-2 uppercase bg-pink-700 text-white hover:text-white hover:bg-hover-800 rounded-full mb-4 md:mb-0 md:mr-2">Publications</a>
                        <a href="/contact " class="px-6 py-2 uppercase bg-white text-gray-800 border border-gray-400 hover:text-gray-800 hover:bg-gray-100 rounded-full">Contact</a>
                    </div>
                    <p class="leading-6"><p>Thank you for your visit!</p>

                        <p>I am a Research Associate at at the <a href="https://www.eui.eu">European University Institute</a>, where I coordinate the <a href="https://cmpf.eui.eu/media-pluralism-monitor/">Media Pluralism Monitor</a>. I completed my PhD on the right of access to information and proactive disclosure of public-sector data, their use and impact on corruption at the <a href="https://www.strath.ac.uk/humanities/governmentpublicpolicy/">University of Strathclyde</a>. My research interests also include studying other indicators of media freedom, e.g., whistle-blowers’ protection and the safety of journalists in physical and digital environment. My work cuts across disciplines and has been published in European Political Science Review and the International Journal of Press/Politics among other journals.</p>

                        <p>Before pursuing my PhD, I was a practitioner in the civil society sector. I helped build digital tools to improve public service delivery and facilitate interactions between political representatives, bureaucrats, and the public. As a believer in bridging academia and the policy world, I continue to engage in discussions with policymakers and public institutions. Lately, I have provided evidence to the UK Parliamentary Public Administration and Constitutional Affairs Committee on The Cabinet Office Freedom of Information Clearing House.</p>
                    </p>
                </section>
            </div>

        </div>
    </main>
    </div><footer class="bg-gray-600 text-white">
    <div class="container mx-auto px-2 py-4 text-sm flex justify-between items-center">
        <div>
            &copy; Mária Žuffová
        </div>

        <p>Political Science </p>
    </div>
</footer>
</template>

<style scoped>

</style>
