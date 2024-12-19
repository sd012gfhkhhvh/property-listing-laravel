import MainLayout from "@/Layouts/MainLayout";
import { Head } from "@inertiajs/react";

export default function Index() {
    return (
        <MainLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Agents
                </h2>
            }
        >
            <Head title="Agents" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            Hello Agents, You're logged in!
                        </div>
                    </div>
                </div>
            </div>
        </MainLayout>
    );
}