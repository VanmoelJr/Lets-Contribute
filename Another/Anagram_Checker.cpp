/* 
   Program to check if two strings are anagram or not.
   Two strings are anagram if both contain the same characters,
   only the order of characters can be different.
*/

#include<bits/stdc++.h>
using namespace std;

int main()
{
	string s1,s2;

	//taking input
	cout<<"Enter two string: ";
	cin>>s1>>s2;

	//sorting both the strings 
	//if after sorting both string are same then both strings are anagrams
	sort(s1.begin(),s1.end());
	sort(s2.begin(), s2.end());
	if( s1 == s2 )
	{
		cout<<"Given strings are anagram.\n";
	}
	else 
	{
		cout<<"Given strings are not anagrams.\n";
	}

	return 0;
}