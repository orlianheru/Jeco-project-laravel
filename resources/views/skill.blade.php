<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: white;">
  <div style="color: red; padding: 20px; text-align: center;">
    <h3 style="color: red; font-family: Arial, sans-serif; font-weight: bold;">My Skills</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
      <div style="background-color: #ffe6e6; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="path/to/javascript-icon.png" alt="JavaScript Icon" style="width: 50px;">
        <h4 style="font-weight: bold;">JavaScript</h4>
        <p>Level: Expert</p>
      </div>
      <div style="background-color: #ffe6e6; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="path/to/python-icon.png" alt="Python Icon" style="width: 50px;">
        <h4 style="font-weight: bold;">Python</h4>
        <p>Level: Intermediate</p>
      </div>
      <div style="background-color: #ffe6e6; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <img src="path/to/html-icon.png" alt="HTML Icon" style="width: 50px;">
        <h4 style="font-weight: bold;">HTML</h4>
        <p>Level: Advanced</p>
      </div>
      <nav class="flex justify-center space-x-6">
            <a href="{{ route('home') }}" class="text-lg hover:text-gray-400">Home</a>
        </nav>
    </div>
  </div>
</div>
