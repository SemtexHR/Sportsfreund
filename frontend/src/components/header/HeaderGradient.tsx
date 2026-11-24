type HeaderGradientProps = {
  title: string;
};

export default function HeaderGradient({ title }: HeaderGradientProps) {
  return (
    <header className="flex h-30 w-full items-center bg-linear-to-b from-torquise-400 to-transparent font-poppins text-white">
      <h1 className="text-[35px] font-jersey px-5 md:px-10 md:text-[40px] lg:text-[50px]">{title}</h1>
    </header>
  );
}
