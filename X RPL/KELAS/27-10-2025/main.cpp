#include <iostream>
#include <string>
using namespace std;

bool isValidDate(int day, int month){

    if(mont <1 || month >12)return false;
    int daysInMonth;

    switch (month){
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        daysInMonth = 31;
        break;
    case 4 : case 6: case 9: case 11:
        daysInMonth = 31;
        break;
    
    case 2:
        daysInMonth = 29; // anggap bisa tahun kabisat
        break;
    default:
        return false;
    }
    return day >= 1 && day <=daysInMonth;
}

string getZodiac(int day, int month) {
    if (day < 1 || day > 31 || month < 1 || month > 12)
        return "tanggal tidak valid";

    if ((month == 12 && day >=22) || (month == 1 && day <=20))
        return "capricorn";

    else if ((month == 1 && day >= 21) || (month == 2 && day <= 18))
        return "aquarius";

    else if ((month == 2 && day >= 19) || (month == 3 && day <= 20))
        return "pisces";

    else if ((month == 3 && day >= 21) || (month == 4 && day <= 18))
        return "aries";

    else if ((month == 4 && day >= 21) || (month == 5 && day <= 20))
        return "taurus";

    else if ((month == 5 && day >= 21) || (month == 6 && day <= 20))
        return "gemini";

    else if ((month == 6 && day >= 21) || (month == 7 && day <= 22))
        return "cancer";

    else if ((month == 7 && day >= 23) || (month == 8 && day <= 22))
        return "leo";

    else if ((month == 8 && day >= 23) || (month == 9 && day <= 22))
        return "virgo";

    else if ((month == 9 && day >= 23) || (month == 10 && day <= 22))
        return "libra";

    else if ((month == 10 && day >= 23) || (month == 11 && day <= 22))
        return "scorpio";

    else if ((month == 11 && day >= 23) || (month == 11 && day <= 21))
        return "sagittarius";

    else return "tanggal tidak valid";
}

int main() {
    int day, month;
    cout << "masukkan tanggal lahir, dan ulan akhir (dd mm): ";
    cin >> day >> month;

    cout << "zodiak kamu: " << getZodiac(day, month) endl;

    return 0;
}