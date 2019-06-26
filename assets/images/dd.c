#include<stdio.h>
main()
{
	int t,n,i,k,j,p=0,temp,u=0,z,x;
	scanf("%d",&t);
	while(t!=0)
	{
		scanf("%d %d",&n,&k);
		int a[n];
		for(i=0;i<n;i++)
		scanf("%d",a[i]);
		for(i=0;i<n;i++)
		{
			for(j=0;j<i;j++)
			{			
			if(a[i]<a[j])
			{
				temp=a[i];
				a[i]=a[j];
				a[j]=temp;
			}
			

			}
		}
		for(i=0;i<k;i++)
		{
		x=0;	
			for(j=0;(j<i||x<n);j++)
			{
				if(a[j]==a[i])
				p++;
				u++;
				x++;
			}
			
			}
		printf("%d",(p+u));
			
	    	
		
	
		t--;
	}
	
}
