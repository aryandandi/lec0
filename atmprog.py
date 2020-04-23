print('Welcome to State Bank Of India ATM')
restart=('Y')
chances = 3
balance = 3250.59
while chances >= 0:
    pin = int(input('Please Enter Your 4 Digit Pin : '))
    if pin == (9823):
        print('The Pin you have been entered is correct : \n')
        while restart not in ('n','no','N','NO','No'):
            print('Please Press 1 For your Balance Information\n')
            print('Please Press 2 To Make Withdrawl\n')
            print('Please Press 3 To Pay in For \n')
            print('Please Press 4 To Return Card\n')
            option = int(input('What would You like to choose ? : '))
            if option == 1:
                print('Your Account Balance is Rs',balance,'\n')
                restart = input('Would You like to go back ? : ')
                if restart in ('n','no','N','NO','No'):
                    print('Thank You')
                    break
            elif option == 2:
                option2 = ('y','Y')
                withdrawl = float(input('How much would you like to withdrawl ? \n Rs-100\tRs-200\tRs-500\tRs-2000 \n enter amount :'))
                if withdrawl in [100, 200, 500, 2000]:
                    balance = balance - withdrawl
                    print('\n Transaction Sucessfull')
                    print('\n Your Balance is Rs',balance)
                    restart = input('Would You like to go back ? : ')
                    if restart in ('n','no','N','NO','No'):
                        print('Thank You')
                        break
                elif withdrawl != [100, 200, 500, 2000]:
                    print('Invalid Amount, Please Re-try\n')
                    restart = ('y','Y')
                elif withdrawl == 1:
                    withdrawl = float(inputt('Please Enter Desird amount:'))

            elif option == 3:
                pay_in = float(input('How Much Would You Like Pay In ? '))
                balance = balance + pay_in
                print('\n Your Balance is Rs',balance)
                restart = input('Would You like to go back ? : ')
                if restart in ('n','no','N','NO','No'):
                    print('Thank You')
                    break
            elif option == 4:
                print('Wait while your card is returned....\n')
                print('Thank You for your service')
                break
            else:
                print('Please Enter correct number. \n')
                restart = ('y','Y')
    elif pin != ('9823'):
        print('Incorrect Password')
        chances = chances - 1
        if chances == 0:
            print('\n Your Card has been Blocked Please try after 24 hours')
            break
