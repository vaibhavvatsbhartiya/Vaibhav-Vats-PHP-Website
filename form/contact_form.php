<!-- Contact Us Form -->
<section class=" py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class=" text-2xl md:text-3xl lg:text-4xl font-bold text-center text-purple-600 mb-12">Get in Touch</h2>
        <form class="bg-white p-8 rounded-lg shadow-lg space-y-6">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
            </div>

            <!-- Service -->
            <div>
                <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service</label>
                <select id="service" name="service" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                    <option value="">Select a Service</option>
                    <option value="Web Development">Web Development</option>
                    <option value="WordPress Development">WordPress Development</option>
                    <option value="SEO Optimization">SEO Optimization</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>

            <!-- Message -->
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Your Message" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="w-full sm:w-auto bg-purple-600 text-white font-bold py-3 px-6 rounded-md shadow-lg hover:bg-purple-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>
