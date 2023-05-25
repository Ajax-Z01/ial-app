// Get dark mode button and icon element
const darkModeButton = document.getElementById('darkModeButton');
const darkModeIcon = document.getElementById('darkModeIcon');

// Check if dark mode is enabled or disabled
const isDarkMode = () => {
  return localStorage.getItem('darkMode') === 'true';
};

// Toggle dark mode
const toggleDarkMode = () => {
  // Check if dark mode is enabled
  const darkModeEnabled = isDarkMode();

  // Update localStorage value for dark mode
  localStorage.setItem('darkMode', !darkModeEnabled);

  // Toggle dark mode classes on body element
  document.body.classList.toggle('dark');

  // Toggle dark mode classes on button and icon elements
  darkModeButton.classList.toggle('dark:bg-gray-800');
  darkModeIcon.classList.toggle('dark:bg-gray-700');

  // Toggle dark mode icon transformation
  darkModeIcon.classList.toggle('translate-x-6');
};

// Initialize dark mode based on saved preference
if (isDarkMode()) {
  document.body.classList.add('dark');
  darkModeButton.classList.add('dark:bg-gray-800');
  darkModeIcon.classList.add('dark:bg-gray-700');
}

// Add event listener to dark mode button
darkModeButton.addEventListener('click', toggleDarkMode);
