#include <iostream>
using namespace std;

int main() {
    

    
        int playerScore;
        int inputX, inputY;
        int playerExit = 5;
        
        int gridBox[5][5]={
            {0,1,0,0,0},
            {0,0,1,0,0},
            {1,1,1,0,0},
            {1,1,1,0,0},
            {0,0,0,0,0}
        };
    
        while(true) {
            cout << "Enter coordinates: \n";
            cin >> inputX;
            cin >> inputY;
            
            if (inputX && inputY == 5) {
                cout << "\n------ Thank you for playing ------";
                break;
            }
            
            gridBox[inputX][inputY];
            
            if (gridBox[inputX][inputY] == 0) {
                cout << "\n------ You found a bomb! ------" << endl << "Game over!\n Score: ";
                break;
            }else {
                cout << "\n------ You found treasure! ------\n" << endl;
    
            }
        }
    
    return 0;
}