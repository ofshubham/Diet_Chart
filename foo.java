class foo{
	public static void main(String [] args){
		int x = 3;
		int y = --x + x++;
		System.out.println(x);
		System.out.println(y);
	}
}