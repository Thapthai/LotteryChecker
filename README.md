 

## รายละเอียดโปรเจกต์:

เป็นระบบที่ช่วยให้ผู้ใช้สามารถตรวจสอบผลรางวัลล็อตเตอรี่ที่ออกในรูปแบบของเลขเด็ดหรือเลขที่พวกเขาซื้อลอตเตอรี่ไปแล้วว่าถูกรางวัลหรือไม่ ระบบนี้ถูกพัฒนาเพื่อให้ผู้ใช้งานสามารถตรวจสอบรางวัลจากฐานข้อมูลที่เก็บไว้ ซึ่งจะมีการจัดเก็บเลขรางวัลที่ชนะตามประเภทต่าง ๆ เช่น รางวัลที่ 1, รางวัลที่ 2, เลขท้าย 2 ตัว, และเลขข้างเคียง

![image](https://github.com/user-attachments/assets/ddb4bdd4-12f3-4b3d-962d-0825a013e07b)

## ฟีเจอร์หลักของโปรเจกต์:

1. ตรวจสอบผลรางวัล: ระบบจะตรวจสอบเลขลอตเตอรี่ของผู้ใช้และเปรียบเทียบกับรางวัลที่ออก โดยผู้ใช้จะสามารถป้อนเลขลอตเตอรี่ได้ และระบบจะบอกผลรางวัลที่ตรงกันได้ในทันที
2. แสดงผลรางวัล: หากเลขของผู้ใช้ตรงกับรางวัล ระบบจะแสดงประเภทรางวัล เช่น รางวัลที่ 1, รางวัลที่ 2, หรือรางวัลเลขท้าย 2 ตัว
3. บันทึกข้อมูลใน Session: ระบบจะเก็บข้อมูลเลขลอตเตอรี่ที่ผู้ใช้ป้อนไว้ใน Session เพื่อให้สามารถแสดงผลรางวัลได้อย่างต่อเนื่องแม้ผู้ใช้รีเฟรชหน้า
4. สุ่มรางวัล: ผู้ดูแลระบบสามารถกำหนดรางวัล เช่น เลขที่ออก และเลขข้างเคียงได้ผ่านทางหน้าบริหาร เพื่อให้ผู้ใช้สามารถทดสอบการตรวจสอบได้

## วัตถุประสงค์:
1. ช่วยให้ผู้ใช้งานสามารถตรวจสอบผลรางวัลล็อตเตอรี่ได้อย่างง่ายดายและรวดเร็ว
2. เก็บข้อมูลผลรางวัลในรูปแบบที่ช่วยให้ผู้ใช้งานสามารถตรวจสอบย้อนหลังได้
3. เพิ่มความสะดวกสบายให้กับผู้ใช้งานที่ต้องการตรวจสอบว่าพวกเขาถูกรางวัลหรือไม่ โดยไม่ต้องตรวจสอบจากแหล่งอื่น

## Project Description:
The project is a system designed to help users check the results of lottery numbers they have purchased to see if they have won any prizes. This system stores winning numbers and allows users to input their lottery numbers, comparing them against the winning numbers to determine if they match any prize categories such as the 1st prize, 2nd prize, last two digits, or adjacent prizes.

Key Features:
1. Prize Checking: Users can enter their lottery numbers, and the system will compare them with the winning numbers to identify if they match any prize categories.
2. Result Display: If the user's number matches any prize, the system displays the relevant prize type, such as the 1st prize, 2nd prize, or last two digits.
3. Session Storage: The system stores the user's ticket number in the session to ensure that the results remain visible even after page refreshes.
4. Prize Generation: Admins can define winning numbers and categories, allowing users to test and verify their lottery numbers with the generated prizes.


## Purpose:
1. To provide users with an easy and convenient way to check their lottery numbers and determine if they have won.
2. To store historical prize data, enabling users to check past results.
3. To improve user experience by offering a straightforward, efficient tool for lottery number verification.

## Project Setup Steps

1. **Clone the Repository**:
   Clone this repository to your local machine using git:
   ```bash
   git clone https://github.com/Thapthai/LotteryChecker.git
   ```

2. **Changing directory**:
  Changing directory to `LotteryChecker`:
   ```
   cd LotteryChecker
   ```

3. ** Install Dependencies**:
   Navigate to the project directory and install the required PHP dependencies via Composer:
   ```bash
   composer install
   ```
4. **Generate the Application Key**:
   Run the following command to generate the application key:
   ```bash
   php artisan key:generate
   ```

5. **Run the server**:
   After setting up everything, start the server by running:
   ```bash
   php artisan serve
   ```
   Once the server is running, open your browser and go to `http://localhost:8000` to access the LotteryChecker application.
   
## Requirements
- PHP >= 8.1
- Laravel >= 10.10
- Composer >= version 2.8.4 
